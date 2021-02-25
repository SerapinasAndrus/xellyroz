<?php
namespace frontend\controllers;


use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Notes;



class NotesController extends Controller
{

    public function actionNotes()
    {
        $notes = Notes::find()->all();
        return $this->render('notes', [
            'notes' => $notes
        ]);
    }


}
