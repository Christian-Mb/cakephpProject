<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormationsTable Test Case
 */
class FormationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormationsTable
     */
    public $Formations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Formations',
        'app.Departments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Formations') ? [] : ['className' => FormationsTable::class];
        $this->Formations = TableRegistry::getTableLocator()->get('Formations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Formations);

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
