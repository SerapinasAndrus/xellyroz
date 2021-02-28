<?php

use yii\helpers\Url;
use frontend\models\Notes;
use yii\helpers\Html;



$this->title = 'XellyRoz';
?>
<div class="site-index">


    <div class="body-content">



    <div class="jumbotron">
<h1 class="label label-warning"><?=$note->name . '<br>[' . $note->date . ']'?></h1>
    <p class="label label-primary"><?=$note->text?></p>
    <a href="/"><<Заметки</a>
           </div>


        </div>

    </div>
