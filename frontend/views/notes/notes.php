<?php
use yii\helpers\Url;
?>

<?php foreach($notes as $note):?>
    <div class='col-lg-4'>
        <a href="<?=Url::to(['notes/note', 'id' => $note->id])?>"><?=$note->name?></a>
    </div>
<?php endForeach;?>