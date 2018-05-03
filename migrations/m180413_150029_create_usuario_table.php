<?php

use yii\db\Migration;

/**
 * Handles the creation of table `usuario`.
 */
class m180413_150029_create_usuario_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'email' => $this->string(120)->notNull(),
            'usuario' => $this->string(30)->notNull(),
            'senha' => $this->string(80)->notNull(),
            'auth_key' => $this->string(80)->notNull(),
            'status' => $this->boolean()->defaultValue(true),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp()
        ]);

        $this->insert('usuario', [
            'nome' => "Administrador",
            'email' => "admin@admin.com",
            'usuario' => "admin",
            'senha' => Yii::$app->security->generatePasswordHash('admin'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');
    }
}
