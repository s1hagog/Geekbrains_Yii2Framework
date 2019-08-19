<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/9/2019
 * Time: 2:55 AM
 */

namespace app\models;


use yii\base\Model;

class Day extends Model
{

    /**
     * @var int
     * Дата события. В Unix timestamp
     */
    public $dateStamp;

    /**
     * @var boolean
     * Определеяет выходной день или нет
     */
    public $isWeekend;


    /**
     * @var Activity
     * Привязанное событие к этому дню
     */
    public $activity;


}