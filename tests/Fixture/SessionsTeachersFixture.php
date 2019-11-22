<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SessionsTeachersFixture
 */
class SessionsTeachersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'sessions_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'teachers_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'hourscm' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'hourstd' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'hourstp' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'participer_sessions_FK' => ['type' => 'index', 'columns' => ['sessions_id'], 'length' => []],
            'participer_teachers0_FK' => ['type' => 'index', 'columns' => ['teachers_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'sessions_id', 'teachers_id'], 'length' => []],
            'participer_sessions_FK' => ['type' => 'foreign', 'columns' => ['sessions_id'], 'references' => ['sessions', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'participer_teachers0_FK' => ['type' => 'foreign', 'columns' => ['teachers_id'], 'references' => ['teachers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => 1,
                'sessions_id' => 1,
                'teachers_id' => 1,
                'hourscm' => 1,
                'hourstd' => 1,
                'hourstp' => 1
            ],
        ];
        parent::init();
    }
}
