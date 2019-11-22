<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SessionsTeacher Entity
 *
 * @property int $id
 * @property int $sessions_id
 * @property int $teachers_id
 * @property float $hourscm
 * @property float $hourstd
 * @property float $hourstp
 *
 * @property \App\Model\Entity\Session $session
 * @property \App\Model\Entity\Teacher $teacher
 */
class SessionsTeacher extends Entity
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
        'hourscm' => true,
        'hourstd' => true,
        'hourstp' => true,
        'session' => true,
        'teacher' => true
    ];
}
