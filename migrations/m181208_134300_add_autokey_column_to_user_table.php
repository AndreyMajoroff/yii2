<?php

use yii\db\Migration;

/**
 * Handles adding autokey to table `user`.
 */
class m181208_134300_add_autokey_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'authokey', $this->string()->unique());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'authokey');
    }
}
