<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class Notes extends ActiveRecord
{
public function rules(){
	return [

		[ ['name'],'string'],
		[ ['title'],'string'],


	];
}
}
