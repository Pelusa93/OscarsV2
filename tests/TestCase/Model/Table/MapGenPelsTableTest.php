<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MapGenPelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MapGenPelsTable Test Case
 */
class MapGenPelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MapGenPelsTable
     */
    public $MapGenPels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.map_gen_pels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MapGenPels') ? [] : ['className' => 'App\Model\Table\MapGenPelsTable'];
        $this->MapGenPels = TableRegistry::get('MapGenPels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MapGenPels);

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
