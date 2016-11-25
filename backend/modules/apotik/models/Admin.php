<?php

namespace backend\modules\apotik\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $authKey
 * @property string $accessToken
 * @property string $role
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property ApotikDokter[] $apotikDokters
 * @property ApotikObat[] $apotikObats
 * @property ApotikPasien[] $apotikPasiens
 * @property ApotikPemasok[] $apotikPemasoks
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['username'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100],
            [['authKey', 'accessToken'], 'string', 'max' => 50],
            [['role'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'role' => 'Role',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApotikDokters()
    {
        return $this->hasMany(ApotikDokter::className(), ['id_admin' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApotikObats()
    {
        return $this->hasMany(ApotikObat::className(), ['id_admin' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApotikPasiens()
    {
        return $this->hasMany(ApotikPasien::className(), ['id_admin' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApotikPemasoks()
    {
        return $this->hasMany(ApotikPemasok::className(), ['id_admin' => 'id']);
    }
}
