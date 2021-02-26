<?php

use yii\helpers\Url;
use frontend\models\Notes;
use yii\helpers\Html;



$this->title = 'XellyRoz';
?>
<div class="site-index">


    <div class="body-content">



    <div class="jumbotron">
<h1><?=$note->name . '<br>[' . $note->date . ']'?></h1>
    <p><?=$note->text?></p>
    <a href="/">Заметки</a>
           </div>


        </div>

    </div>
