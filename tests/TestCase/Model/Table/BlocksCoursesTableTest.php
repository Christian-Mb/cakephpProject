<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlocksCoursesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlocksCoursesTable Test Case
 */
class BlocksCoursesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BlocksCoursesTable
     */
    public $BlocksCourses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BlocksCourses',
        'app.Courses',
        'app.Blocks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BlocksCourses') ? [] : ['className' => BlocksCoursesTable::class];
        $this->BlocksCourses = TableRegistry::getTableLocator()->get('BlocksCourses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BlocksCourses);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
