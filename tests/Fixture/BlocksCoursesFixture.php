<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BlocksCoursesFixture
 */
class BlocksCoursesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'courses_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'blocks_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'numep' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'contenir_courses_FK' => ['type' => 'index', 'columns' => ['courses_id'], 'length' => []],
            'contenir_blocks0_FK' => ['type' => 'index', 'columns' => ['blocks_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'blocks_id', 'courses_id'], 'length' => []],
            'contenir_blocks0_FK' => ['type' => 'foreign', 'columns' => ['blocks_id'], 'references' => ['blocks', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'contenir_courses_FK' => ['type' => 'foreign', 'columns' => ['courses_id'], 'references' => ['courses', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'courses_id' => 1,
                'blocks_id' => 1,
                'numep' => 'Lorem ip'
            ],
        ];
        parent::init();
    }
}
