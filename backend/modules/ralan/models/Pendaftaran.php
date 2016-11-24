<?php

namespace backend\modules\ralan\models;

use Yii;

/**
 * This is the model class for table "ralan_tblpendaftaran".
 *
 * @property integer $no_pendaftaran
 * @property integer $id_pasien
 * @property string $tanggal_pendaftaran
 * @property integer $id_poli
 * @property integer $id_dokter
 * @property integer $no_antrian
 *
 * @property RalanTblpemeriksaandokter[] $ralanTblpemeriksaandokters
 * @property RalanTblpasien $idPasien
 * @property RalanTblpoliklinik $idPoli
 * @property RalanTbldokter $idDokter
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ralan_tblpendaftaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pasien', 'tanggal_pendaftaran', 'id_poli', 'id_dokter', 'no_antrian'], 'required'],
            [['id_pasien', 'id_poli', 'id_dokter', 'no_antrian'], 'integer'],
            [['tanggal_pendaftaran'], 'safe'],
            [['id_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::className(), 'targetAttribute' => ['id_pasien' => 'id_pasien']],
            [['id_poli'], 'exist', 'skipOnError' => true, 'targetClass' => Poli::className(), 'targetAttribute' => ['id_poli' => 'id_poli']],
            [['id_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::className(), 'targetAttribute' => ['id_dokter' => 'id_dokter']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no_pendaftaran' => 'No Pendaftaran',
            'id_pasien' => 'Id Pasien',
            'tanggal_pendaftaran' => 'Tanggal Pendaftaran',
            'id_poli' => 'Id Poli',
            'id_dokter' => 'Id Dokter',
            'no_antrian' => 'No Antrian',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRalanTblpemeriksaandokter()
    {
        return $this->hasMany(Pemeriksaan::className(), ['id_pendaftaran' => 'no_pendaftaran']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPasien()
    {
        return $this->hasOne(RalanTblpasien::className(), ['id_pasien' => 'id_pasien']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPoli()
    {
        return $this->hasOne(RalanTblpoliklinik::className(), ['id_poli' => 'id_poli']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDokter()
    {
        return $this->hasOne(RalanTbldokter::className(), ['id_dokter' => 'id_dokter']);
    }

    
}
