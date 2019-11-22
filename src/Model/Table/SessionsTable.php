<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sessions Model
 *
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 * @property \App\Model\Table\DatesTable&\Cake\ORM\Association\BelongsTo $Dates
 * @property \App\Model\Table\DatesTable&\Cake\ORM\Association\BelongsTo $Dates
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\BelongsTo $Teachers
 *
 * @method \App\Model\Entity\Session get($primaryKey, $options = [])
 * @method \App\Model\Entity\Session newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Session[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Session|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Session saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Session patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Session[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Session findOrCreate($search, callable $callback = null, $options = [])
 */
class SessionsTable extends Table
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

        $this->setTable('sessions');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'teachers_id', 'courses_id', 'dates_starts_id', 'dates_ends_id']);

        $this->belongsTo('Courses', [
            'foreignKey' => 'courses_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Dates', [
            'foreignKey' => 'dates_starts_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Dates', [
            'foreignKey' => 'dates_ends_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Teachers', [
            'foreignKey' => 'teachers_id',
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
            ->integer('groupscm')
            ->requirePresence('groupscm', 'create')
            ->notEmptyString('groupscm');

        $validator
            ->integer('groupstd')
            ->requirePresence('groupstd', 'create')
            ->notEmptyString('groupstd');

        $validator
            ->integer('groupstp')
            ->requirePresence('groupstp', 'create')
            ->notEmptyString('groupstp');

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
        $rules->add($rules->existsIn(['dates_starts_id'], 'Dates'));
        $rules->add($rules->existsIn(['dates_ends_id'], 'Dates'));
        $rules->add($rules->existsIn(['teachers_id'], 'Teachers'));

        return $rules;
    }
}
