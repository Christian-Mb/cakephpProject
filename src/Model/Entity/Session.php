<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Session Entity
 *
 * @property int $id
 * @property int $groupscm
 * @property int $groupstd
 * @property int $groupstp
 * @property int $courses_id
 * @property \Cake\I18n\FrozenDate $dates_starts_id
 * @property \Cake\I18n\FrozenDate $dates_ends_id
 * @property int $teachers_id
 *
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Date $date
 * @property \App\Model\Entity\Teacher $teacher
 */
class Session extends Entity
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
        'groupscm' => true,
        'groupstd' => true,
        'groupstp' => true,
        'course' => true,
        'date' => true,
        'teacher' => true
    ];
}
