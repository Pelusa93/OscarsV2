<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MapPelicula Entity
 *
 * @property int $idPelicula
 * @property string $titulo_original
 * @property string $titulo_espanol
 * @property \Cake\I18n\Time $fecha_estreno_oficial
 * @property int $dur_min
 * @property string $censura
 * @property \Cake\I18n\Time $fecha_estrenoLA
 * @property string $sipnosis
 * @property int $numero_secuela
 * @property int $idPelicula_secuela
 */
class MapPelicula extends Entity
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
        'idPelicula' => false
    ];
}
