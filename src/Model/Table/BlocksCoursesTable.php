<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BlocksCourses Model
 *
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 * @property \App\Model\Table\BlocksTable&\Cake\ORM\Association\BelongsTo $Blocks
 *
 * @method \App\Model\Entity\BlocksCourse get($primaryKey, $options = [])
 * @method \App\Model\Entity\BlocksCourse newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BlocksCourse[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BlocksCourse|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BlocksCourse saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BlocksCourse patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BlocksCourse[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BlocksCourse findOrCreate($search, callable $callback = null, $options = [])
 */
class BlocksCoursesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('blocks_courses');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'blocks_id', 'courses_id']);

        $this->belongsTo('Courses', [
            'foreignKey' => 'courses_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Blocks', [
            'foreignKey' => 'blocks_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('numep')
            ->maxLength('numep', 10)
            ->requirePresence('numep', 'create')
            ->notEmptyString('numep');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['courses_id'], 'Courses'));
        $rules->add($rules->existsIn(['blocks_id'], 'Blocks'));

        return $rules;
    }
}
