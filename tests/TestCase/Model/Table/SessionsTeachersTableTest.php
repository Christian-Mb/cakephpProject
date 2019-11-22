<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SessionsTeachersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SessionsTeachersTable Test Case
 */
class SessionsTeachersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SessionsTeachersTable
     */
    public $SessionsTeachers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SessionsTeachers',
        'app.Sessions',
        'app.Teachers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SessionsTeachers') ? [] : ['className' => SessionsTeachersTable::class];
        $this->SessionsTeachers = TableRegistry::getTableLocator()->get('SessionsTeachers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SessionsTeachers);

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
