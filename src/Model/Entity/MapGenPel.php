<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MapGenPel Entity
 *
 * @property int $fk_idGenero
 * @property int $fk_idPelicula
 */
class MapGenPel extends Entity
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
        'fk_idGenero' => false,
        'fk_idPelicula' => false
    ];
}
