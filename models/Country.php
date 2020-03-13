<?php
namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public $Name;

    public function rules()

    {

        return [

            [['Country'], 'required'],

            ['Country'],

        ];
        
    }

}