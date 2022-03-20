<?php

namespace common\models;

use Yii;
use \common\models\base\Teacher as BaseTeacher;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "_teacher".
 */
class Teacher extends BaseTeacher
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}
