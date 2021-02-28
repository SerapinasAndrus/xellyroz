<?php

use yii\helpers\Url;
use frontend\models\Notes;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$model = new Notes();
/* @var $this yii\web\View */

$this->title = 'XellyRoz';
?>
<div class="site-index">


    <div class="body-content">



    <div class="jumbotron">

    <?php $form = ActiveForm::begin();?>
        <?= $form->field($model, 'name')->textInput(); ?>
         <?= $form->field($model, 'text')->textArea(); ?>
        <div class="form-group">
            <?= Html::submitButton('Добавить заметку', ['class' => 'btn btn-success'])?>
        </div>
    <?php ActiveForm::end(); ?>

           </div>
<h1>Ваши Заметки:</h1>

        <div class="row">
        <?php foreach($notes as $note):?>
           <div class="col-lg-3">

                           <h2><a class="label label-warning" href="<?=Url::to(['site/note', 'id' => $note->id])?>"><?=$note->name?></a><br>[<?=$note->date?>]<br> ...</h2>

            </div>
            <?php endForeach;?>
        </div>

    </div>
</div>
