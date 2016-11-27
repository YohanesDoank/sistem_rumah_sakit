<?php

namespace backend\modules\apotik\models;

use Yii;

/**
 * This is the model class for table "apotik_apoteker".
 *
 * @property integer $id_apoteker
 * @property string $nama
 * @property string $alamat
 * @property integer $no_telp
 * @property string $jam_mulai
 * @property string $jam_selesai
 * @property integer $id_admin
 

 *
 * @property ApotikResep[] $apotikReseps
 * @property Admin $idAdmin
 */
class Apoteker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apotik_apoteker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'no_telp', 'jam_mulai', 'jam_selesai','id_admin'], 'required'],
            [['id_apoteker', 'no_telp', 'id_admin'], 'integer'],
            [['jam_mulai', 'jam_selesai'], 'safe'],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['id_admin'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['id_admin' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_apoteker' => 'Id Apoteker',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telpon',
            'jam_mulai' => 'Jam Mulai Kerja',
            'jam_selesai' => 'Jam Selesai Kerja',
            'id_admin' => 'Id Admin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApotikReseps()
    {
        return $this->hasMany(ApotikResep::className(), ['id_apoteker' => 'id_apoteker']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAdmin()
    {
        return $this->hasOne(Admin::className(), ['id' => 'id_admin']);
    }
}
