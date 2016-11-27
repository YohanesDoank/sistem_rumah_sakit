<?php

namespace backend\modules\ralan\models;

use Yii;

/**
 * This is the model class for table "ralan_tblpoliklinik".
 *
 * @property integer $id_poli
 * @property integer $id_dokter
 * @property string $nama_poli
 * @property integer $id_jadwal
 *
 * @property RalanTblpendaftaran[] $ralanTblpendaftarans
 * @property Dokter $idDokter
 * @property RalanJadwal $idJadwal
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
            [['id_dokter', 'id_jadwal'], 'integer'],
            [['nama_poli', 'id_jadwal'], 'required'],
            [['nama_poli'], 'string', 'max' => 50],
            [['id_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::className(), 'targetAttribute' => ['id_dokter' => 'id_dokter']],
            [['id_jadwal'], 'exist', 'skipOnError' => true, 'targetClass' => Jadwal::className(), 'targetAttribute' => ['id_jadwal' => 'id_jadwal']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_poli' => 'Id Poli',
            'id_dokter' => 'Id Dokter',
            'nama_poli' => 'Nama Poli',
            'id_jadwal' => 'Id Jadwal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRalanTblpendaftarans()
    {
        return $this->hasMany(RalanTblpendaftaran::className(), ['id_poli' => 'id_poli']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDokter()
    {
        return $this->hasOne(Dokter::className(), ['id_dokter' => 'id_dokter']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJadwal()
    {
        return $this->hasOne(Jadwal::className(), ['id_jadwal' => 'id_jadwal']);
    }
}
