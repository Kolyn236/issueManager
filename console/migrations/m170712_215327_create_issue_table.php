<?php

use yii\db\Migration;

/**
 * Handles the creation of table `issue`.
 */
class m170712_215327_create_issue_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('issue', [
            'id' => $this->primaryKey(),
            'author' => $this->integer(),
            'date' => $this->date(),
            'description' => $this->string(),
            'deadLine' => $this->date(),
            'active' => $this->boolean(),
            'ready' => $this->boolean(),
            'executor' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('issue');
    }
}
