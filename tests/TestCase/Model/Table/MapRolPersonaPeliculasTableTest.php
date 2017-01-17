<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MapRolPersonaPeliculasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MapRolPersonaPeliculasTable Test Case
 */
class MapRolPersonaPeliculasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MapRolPersonaPeliculasTable
     */
    public $MapRolPersonaPeliculas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.map_rol_persona_peliculas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MapRolPersonaPeliculas') ? [] : ['className' => 'App\Model\Table\MapRolPersonaPeliculasTable'];
        $this->MapRolPersonaPeliculas = TableRegistry::get('MapRolPersonaPeliculas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MapRolPersonaPeliculas);

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
