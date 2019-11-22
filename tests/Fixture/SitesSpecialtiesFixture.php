<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SitesSpecialtiesFixture
 */
class SitesSpecialtiesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'sites_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'specialties_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'sitesspe_specialties_FK' => ['type' => 'index', 'columns' => ['specialties_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['sites_id', 'specialties_id'], 'length' => []],
            'sitesspe_sites0_FK' => ['type' => 'foreign', 'columns' => ['sites_id'], 'references' => ['sites', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sitesspe_specialties_FK' => ['type' => 'foreign', 'columns' => ['specialties_id'], 'references' => ['specialties', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'sites_id' => 1,
                'specialties_id' => 1
            ],
        ];
        parent::init();
    }
}
