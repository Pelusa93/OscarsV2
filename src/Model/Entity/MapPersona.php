<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MapPersona Entity
 *
 * @property int $idPersona
 * @property string $nombre1
 * @property string $nombre2
 * @property string $apellido1
 * @property string $apellido2
 * @property \Cake\I18n\Time $fnac
 * @property string $biografia
 * @property string $genero
 * @property string $raza
 * @property \Cake\I18n\Time $fecha_muerte
 * @property string $nombre_artistico
 * @property \Cake\I18n\Time $fecha_inicio_carrera
 * @property int $fk_idLugar_Direccion
 */
class MapPersona extends Entity
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
        'idPersona' => false
    ];
}
