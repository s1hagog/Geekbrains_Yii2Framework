<?php
/**
 * Created by PhpStorm.
 * User: s1hag
 * Date: 8/8/2019
 * Time: 10:46 PM
 */

namespace app\models;


use yii\base\Model;

class Activity extends Model
{
    public $title;
    public $description;
    public $dateStart;
    public $isBlocked;

    public function rules()
    {
        return [
            ['title', 'required'],
            ['dateStart', 'string'],
            ['description', 'string', 'min' => 5],
            ['isBlocked', 'boolean']
        ];
    }

    public function attributeLabels()
    {
        return [
            'title'=>'Название события',
            'description'=>'Описание'
        ];
    }
}