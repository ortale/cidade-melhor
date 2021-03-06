<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Request Entity
 *
 * @property int $id
 * @property string $latitude
 * @property string $longitude
 * @property string $endereco_fisico
 * @property string $image
 * @property \Cake\I18n\Time $created
 * @property int $request_type_id
 * @property int $request_status_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\RequestType $request_type
 * @property \App\Model\Entity\RequestStatus $request_status
 * @property \App\Model\Entity\User $user
 */
class Request extends Entity
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
        'id' => false
    ];
}
