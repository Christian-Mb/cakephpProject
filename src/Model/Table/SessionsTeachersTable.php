<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SessionsTeachers Model
 *
 * @property \App\Model\Table\SessionsTable&\Cake\ORM\Association\BelongsTo $Sessions
 * @property \App\Model\Table\TeachersTable&\Cake\ORM\Association\BelongsTo $Teachers
 *
 * @method \App\Model\Entity\SessionsTeacher get($primaryKey, $options = [])
 * @method \App\Model\Entity\SessionsTeacher newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SessionsTeacher[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SessionsTeacher|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SessionsTeacher saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SessionsTeacher patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SessionsTeacher[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SessionsTeacher findOrCreate($search, callable $callback = null, $options = [])
 */
class SessionsTeachersTable extends Table
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

        $this->setTable('sessions_teachers');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'sessions_id', 'teachers_id']);

        $this->belongsTo('Sessions', [
            'foreignKey' => 'sessions_id',
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
            ->numeric('hourscm')
            ->requirePresence('hourscm', 'create')
            ->notEmptyString('hourscm');

        $validator
            ->numeric('hourstd')
            ->requirePresence('hourstd', 'create')
            ->notEmptyString('hourstd');

        $validator
            ->numeric('hourstp')
            ->requirePresence('hourstp', 'create')
            ->notEmptyString('hourstp');

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
        $rules->add($rules->existsIn(['sessions_id'], 'Sessions'));
        $rules->add($rules->existsIn(['teachers_id'], 'Teachers'));

        return $rules;
    }
}
