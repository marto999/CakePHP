<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contrato Entity
 *
 * @property int $id
 * @property int $cliente_id
 * @property string $contratos
 * @property \Cake\I18n\FrozenDate $fecha
 * @property float $montos
 *
 * @property \App\Model\Entity\Cliente $cliente
 */
class Contrato extends Entity
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
        'cliente_id' => true,
        'contratos' => true,
        'fecha' => true,
        'montos' => true,
        'cliente' => true,
    ];
}
