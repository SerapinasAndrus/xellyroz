<?php
use yii\helpers\Url;
?>

<?php foreach($notes as $note):?>
    <div>
        <p><?=$note->id . $note->name?></p>
        <a href="<?=Url::to(['notes/note', 'id' => $note->id])?>"><?=$note->id?></a>
    </div>
<?php endForeach;?>