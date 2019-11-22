<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SitesSpecialties Model
 *
 * @property \App\Model\Table\SitesTable&\Cake\ORM\Association\BelongsTo $Sites
 * @property \App\Model\Table\SpecialtiesTable&\Cake\ORM\Association\BelongsTo $Specialties
 *
 * @method \App\Model\Entity\SitesSpecialty get($primaryKey, $options = [])
 * @method \App\Model\Entity\SitesSpecialty newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SitesSpecialty[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SitesSpecialty|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SitesSpecialty saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SitesSpecialty patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SitesSpecialty[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SitesSpecialty findOrCreate($search, callable $callback = null, $options = [])
 */
class SitesSpecialtiesTable extends Table
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

        $this->setTable('sites_specialties');
        $this->setDisplayField('sites_id');
        $this->setPrimaryKey(['sites_id', 'specialties_id']);

        $this->belongsTo('Sites', [
            'foreignKey' => 'sites_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Specialties', [
            'foreignKey' => 'specialties_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['sites_id'], 'Sites'));
        $rules->add($rules->existsIn(['specialties_id'], 'Specialties'));

        return $rules;
    }
}
