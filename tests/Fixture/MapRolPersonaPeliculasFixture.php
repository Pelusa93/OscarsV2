<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MapRolPersonaPeliculasFixture
 *
 */
class MapRolPersonaPeliculasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idRol_Persona_Pelicula' => ['type' => 'integer', 'length' => 9, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cancion' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'personaje' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fk_idPelicula' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fk_idRol' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fk_idPersona' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Rol_Persona_Pelicula_Pelicula2_idx' => ['type' => 'index', 'columns' => ['fk_idPelicula'], 'length' => []],
            'fk_Rol_Persona_Pelicula_Rol2_idx' => ['type' => 'index', 'columns' => ['fk_idRol'], 'length' => []],
            'fk_Rol_Persona_Pelicula_Persona1_idx' => ['type' => 'index', 'columns' => ['fk_idPersona'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idRol_Persona_Pelicula'], 'length' => []],
            'fk_Rol_Persona_Pelicula_Pelicula2' => ['type' => 'foreign', 'columns' => ['fk_idPelicula'], 'references' => ['map_peliculas', 'idPelicula'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Rol_Persona_Pelicula_Persona1' => ['type' => 'foreign', 'columns' => ['fk_idPersona'], 'references' => ['map_personas', 'idPersona'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Rol_Persona_Pelicula_Rol2' => ['type' => 'foreign', 'columns' => ['fk_idRol'], 'references' => ['map_rols', 'idRol'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'idRol_Persona_Pelicula' => 1,
            'cancion' => 'Lorem ipsum dolor sit amet',
            'personaje' => 'Lorem ipsum dolor sit amet',
            'fk_idPelicula' => 1,
            'fk_idRol' => 1,
            'fk_idPersona' => 1
        ],
    ];
}
