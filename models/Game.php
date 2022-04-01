<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_games".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string|null $genre
 * @property string|null $developer
 * @property string|null $release_date
 * @property string $platform
 * @property string|null $media_type
 * @property string|null $status
 * @property string|null $remarks
 *
 * @property Users $user
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_games';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'platform'], 'required'],
            [['user_id'], 'integer'],
            [['release_date'], 'safe'],
            [['name', 'genre', 'developer', 'platform', 'media_type', 'status', 'remarks'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'genre' => 'Genre',
            'developer' => 'Developer',
            'release_date' => 'Release Date',
            'platform' => 'Platform',
            'media_type' => 'Media Type',
            'status' => 'Status',
            'remarks' => 'Remarks',
        ];
    }

    public function fields(){
        return [
            'name',
            'genre',
            'developer',
            'release_date',
            'platform',
            'media_type',
            'status',
            'remarks',
            'added_date',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
