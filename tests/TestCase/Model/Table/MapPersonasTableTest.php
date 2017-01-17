<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MapPersonasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MapPersonasTable Test Case
 */
class MapPersonasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MapPersonasTable
     */
    public $MapPersonas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.map_personas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MapPersonas') ? [] : ['className' => 'App\Model\Table\MapPersonasTable'];
        $this->MapPersonas = TableRegistry::get('MapPersonas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MapPersonas);

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
