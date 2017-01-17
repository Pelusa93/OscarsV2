<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MapGenPelsFixture
 *
 */
class MapGenPelsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'fk_idGenero' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fk_idPelicula' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Gen_Pel_Genero2_idx' => ['type' => 'index', 'columns' => ['fk_idGenero'], 'length' => []],
            'fk_Gen_Pel_Pelicula2_idx' => ['type' => 'index', 'columns' => ['fk_idPelicula'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['fk_idGenero', 'fk_idPelicula'], 'length' => []],
            'fk_Gen_Pel_Genero2' => ['type' => 'foreign', 'columns' => ['fk_idGenero'], 'references' => ['map_generos', 'idGenero'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Gen_Pel_Pelicula2' => ['type' => 'foreign', 'columns' => ['fk_idPelicula'], 'references' => ['map_peliculas', 'idPelicula'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'fk_idGenero' => 1,
            'fk_idPelicula' => 1
        ],
    ];
}
