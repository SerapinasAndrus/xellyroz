<?php

use yii\db\Migration;

/**
 * Class m210224_192026_notes
 */
class m210224_192026_notes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210224_192026_notes cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('notes', [
            'id' => $this->primaryKey(),
            'iduser' => $this->integer(11),
            'name' => $this->string(11),
            'text' => $this->string(2000),
        ]);
    }

    public function down()
    {
        $this->dropTable('notes');
    }

}
