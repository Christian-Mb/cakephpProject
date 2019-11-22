<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeriodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeriodsTable Test Case
 */
class PeriodsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeriodsTable
     */
    public $Periods;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Periods'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Periods') ? [] : ['className' => PeriodsTable::class];
        $this->Periods = TableRegistry::getTableLocator()->get('Periods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Periods);

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
}
