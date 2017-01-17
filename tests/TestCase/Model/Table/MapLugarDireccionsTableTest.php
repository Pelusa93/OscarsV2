<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MapLugarDireccionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MapLugarDireccionsTable Test Case
 */
class MapLugarDireccionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MapLugarDireccionsTable
     */
    public $MapLugarDireccions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.map_lugar_direccions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MapLugarDireccions') ? [] : ['className' => 'App\Model\Table\MapLugarDireccionsTable'];
        $this->MapLugarDireccions = TableRegistry::get('MapLugarDireccions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MapLugarDireccions);

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
