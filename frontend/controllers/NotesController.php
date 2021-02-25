<?php
namespace frontend\controllers;


use Yii;
use yii\web\Controller;
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
