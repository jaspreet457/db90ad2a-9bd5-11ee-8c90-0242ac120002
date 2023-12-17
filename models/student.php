<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class Student extends Model
{
    public $StudentId;
    public $Reports;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // $StudentId and $Reports are both required
            [['StudentId', 'Reports'], 'required'],
        ];
    }  
}
