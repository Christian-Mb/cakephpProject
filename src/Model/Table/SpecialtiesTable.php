<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Specialties Model
 *
 * @property \App\Model\Table\SitesTable&\Cake\ORM\Association\BelongsToMany $Sites
 *
 * @method \App\Model\Entity\Specialty get($primaryKey, $options = [])
 * @method \App\Model\Entity\Specialty newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Specialty[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Specialty|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Specialty saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Specialty patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Specialty[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Specialty findOrCreate($search, callable $callback = null, $options = [])
 */
class SpecialtiesTable extends Table
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

        $this->setTable('specialties');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Sites', [
            'foreignKey' => 'specialty_id',
            'targetForeignKey' => 'site_id',
            'joinTable' => 'sites_specialties'
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
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
