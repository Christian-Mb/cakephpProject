<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SessionsFixture
 */
class SessionsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'groupscm' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'groupstd' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'groupstp' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'courses_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dates_starts_id' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'dates_ends_id' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'teachers_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'sessions_courses_FK' => ['type' => 'index', 'columns' => ['courses_id'], 'length' => []],
            'sessions_dates0_FK' => ['type' => 'index', 'columns' => ['dates_starts_id'], 'length' => []],
            'sessions_dates1_FK' => ['type' => 'index', 'columns' => ['dates_ends_id'], 'length' => []],
            'sessions_teachers2_FK' => ['type' => 'index', 'columns' => ['teachers_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'teachers_id', 'courses_id', 'dates_starts_id', 'dates_ends_id'], 'length' => []],
            'sessions_courses_FK' => ['type' => 'foreign', 'columns' => ['courses_id'], 'references' => ['courses', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sessions_dates0_FK' => ['type' => 'foreign', 'columns' => ['dates_starts_id'], 'references' => ['dates', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sessions_dates1_FK' => ['type' => 'foreign', 'columns' => ['dates_ends_id'], 'references' => ['dates', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sessions_teachers2_FK' => ['type' => 'foreign', 'columns' => ['teachers_id'], 'references' => ['teachers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'groupscm' => 1,
                'groupstd' => 1,
                'groupstp' => 1,
                'courses_id' => 1,
                'dates_starts_id' => '2019-11-22',
                'dates_ends_id' => '2019-11-22',
                'teachers_id' => 1
            ],
        ];
        parent::init();
    }
}
