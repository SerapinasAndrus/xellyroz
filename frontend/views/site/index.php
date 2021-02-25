<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'XellyRoz';
?>
<div class="site-index">


    <div class="body-content">



    <div class="jumbotron">
        <h1>Congratulations!</h1>

           </div>


        <div class="row">
        <?php foreach($notes as $note):?>
           <div class="col-lg-4">
                           <h2><a href="<?=Url::to(['notes/note', 'id' => $note->id])?>"><?=$note->name?></a></h2>
            </div>
            <?php endForeach;?>
        </div>

    </div>
</div>
