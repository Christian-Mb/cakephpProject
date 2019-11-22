<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SitesSpecialtiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SitesSpecialtiesTable Test Case
 */
class SitesSpecialtiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SitesSpecialtiesTable
     */
    public $SitesSpecialties;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SitesSpecialties',
        'app.Sites',
        'app.Specialties'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SitesSpecialties') ? [] : ['className' => SitesSpecialtiesTable::class];
        $this->SitesSpecialties = TableRegistry::getTableLocator()->get('SitesSpecialties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SitesSpecialties);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
