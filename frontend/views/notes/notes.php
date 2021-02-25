<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\models\Notes;
use yii\widgets\ActiveForm;

<?foreach($notes => $note) :?>
<?= $note->name?>
<?endforeach;?>