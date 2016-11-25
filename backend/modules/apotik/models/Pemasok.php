<?php

namespace backend\modules\apotik\models;

use Yii;

/**
 * This is the model class for table "apotik_pemasok".
 *
 * @property string $id_pemasok
 * @property string $nama
 * @property string $no_telp
 * @property string $alamat
 * @property integer $id_admin
 
 * @property ApotikObat[] $apotikObats
 * @property Admin $idAdmin
 */
class Pemasok extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apotik_pemasok';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'no_telp', 'alamat','id_admin'], 'required'],
            [['id_pemasok'], 'string', 'max' => 30],
            [['nama'], 'string', 'max' => 50],
            [['no_telp'], 'string', 'max' => 22],
            [['alamat'], 'string', 'max' => 100],
            [['id_admin'], 'integer'],
            [['id_admin'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['id_admin' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pemasok' => 'Id Pemasok',
            'nama' => 'Nama',
            'no_telp' => 'No Telp',
            'alamat' => 'Alamat',
            'id_admin' => 'Id Admin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApotikObats()
    {
        return $this->hasMany(ApotikObat::className(), ['id_pemasok_obat' => 'id_pemasok']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAdmin()
    {
        return $this->hasOne(Admin::className(), ['id' => 'id_admin']);
    }
}
