<?php

namespace backend\modules\ralan\models;

use Yii;

/**
 * This is the model class for table "ralan_tblpoliklinik".
 *
 * @property integer $id_poli
 * @property integer $id_dokter
 * @property string $nama_poli
 * @property string $waktu_layanan
 * @property string $waktu_selesai
 * @property integer $sesi
 * @property string $hari
 *
 * @property RalanTblpendaftaran[] $ralanTblpendaftarans
 */
class Poli extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ralan_tblpoliklinik';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_dokter', 'sesi'], 'integer'],
            [['nama_poli', 'sesi', 'hari'], 'required'],
            
            [['nama_poli'], 'string', 'max' => 15],
            [['hari'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_poli' => 'Id Poli',
            'id_dokter' => 'Nama Dokter',
            'nama_poli' => 'Nama Poli',
           
            'sesi' => 'Sesi',
            'hari' => 'Hari',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRalanTblpendaftaran()
    {
        return $this->hasMany(Pendaftaran::className(), ['id_poli' => 'id_poli']);
    }
}
