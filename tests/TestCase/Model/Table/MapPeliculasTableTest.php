<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MapPeliculasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MapPeliculasTable Test Case
 */
class MapPeliculasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MapPeliculasTable
     */
    public $MapPeliculas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.map_peliculas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MapPeliculas') ? [] : ['className' => 'App\Model\Table\MapPeliculasTable'];
        $this->MapPeliculas = TableRegistry::get('MapPeliculas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MapPeliculas);

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
