<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MapRolPersonaPelicula Entity
 *
 * @property int $idRol_Persona_Pelicula
 * @property string $cancion
 * @property string $personaje
 * @property int $fk_idPelicula
 * @property int $fk_idRol
 * @property int $fk_idPersona
 */
class MapRolPersonaPelicula extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'idRol_Persona_Pelicula' => false
    ];
}
