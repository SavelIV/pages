<?php

use yii\db\Migration;

/**
 * Class m210812_025235_create_admin_user
 */
class m210812_025235_create_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'username' => 'admin',
            'auth_key' => 'APsmdR1vzDmAkucYnxmoguYTGCfIdmK2',
            'password_hash' => '$2y$13$iWioSOqb90NSDt2Av16Pcelz7KyD.XMtgtMPNAkdeYTm.rBICrO1u',
            'verification_token' => 'DgYCP5kIpHsTsoiejR5JH3UKw-5Clvnl_1628607225',
            'password_reset_token' => NULL,
            'created_at' => 1622328195,
            'updated_at' => 1622328195,
            'email' => 'admin@admin.com',
            'status' => 10,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('user', ['username' => 'admin']);
    }
}
