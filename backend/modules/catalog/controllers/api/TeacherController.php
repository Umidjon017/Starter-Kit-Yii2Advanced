<?php

namespace backend\modules\catalog\controllers\api;

/**
* This is the class for REST controller "TeacherController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class TeacherController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\teacher';
}
