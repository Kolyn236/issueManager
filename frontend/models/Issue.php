<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "issue".
 *
 * @property integer $id
 * @property integer $author
 * @property string $date
 * @property string $description
 * @property string $deadLine
 * @property integer $active
 * @property integer $ready
 * @property integer $executor
 */
class Issue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'issue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'active', 'ready', 'executor'], 'integer'],
            [['date', 'deadLine'], 'safe'],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'date' => 'Date',
            'description' => 'Description',
            'deadLine' => 'Dead Line',
            'active' => 'Active',
            'ready' => 'Ready',
            'executor' => 'Executor',
        ];
    }
}
