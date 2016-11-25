<?php

namespace backend\modules\apotik\models;

use Yii;

/**
 * This is the model class for table "apotik_resep".
 *
 * @property integer $nomor_resep
 * @property integer $id_pasien
 * @property string $nama_pasien
 * @property integer $id_dokter
 * @property string $nama_dokter
 * @property integer $id_apoteker
 * @property string $nama_apoteker
 * @property string $resep_tgl
 * @property integer $id_admin
 *
 * @property Antrian[] $apotikAntrians
 * @property Dokter $idDokter
 * @property Admin $idAdmin
 * @property ApotikApoteker $idApoteker
 * @property Pasien $idPasien
 * @property ApotikResepObat[] $apotikResepObats
 */
class Resep extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apotik_resep';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_dokter', 'id_apoteker', 'resep_tgl', 'id_admin'], 'required'],
            [['id_pasien', 'id_dokter', 'id_apoteker', 'id_admin'], 'integer'],
            [['resep_tgl'], 'safe'],
            [['nama_pasien', 'nama_dokter', 'nama_apoteker'], 'string', 'max' => 100],
            [['id_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::className(), 'targetAttribute' => ['id_dokter' => 'id_dokter']],
            [['id_admin'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['id_admin' => 'id']],
            [['id_apoteker'], 'exist', 'skipOnError' => true, 'targetClass' => Apoteker::className(), 'targetAttribute' => ['id_apoteker' => 'id_apoteker']],
            [['id_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::className(), 'targetAttribute' => ['id_pasien' => 'id_pasien']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nomor_resep' => 'Nomor Resep',
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'id_dokter' => 'Id Dokter',
            'nama_dokter' => 'Nama Dokter',
            'id_apoteker' => 'Id Apoteker',
            'nama_apoteker' => 'Nama Apoteker',
            'resep_tgl' => 'Resep Tgl',
            'id_admin' => 'Id Admin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApotikAntrians()
    {
        return $this->hasMany(ApotikAntrian::className(), ['nomor_resep' => 'nomor_resep']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDokter()
    {
        return $this->hasOne(ApotikDokter::className(), ['id_dokter' => 'id_dokter']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAdmin()
    {
        return $this->hasOne(Admin::className(), ['id' => 'id_admin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdApoteker()
    {
        return $this->hasOne(ApotikApoteker::className(), ['id_apoteker' => 'id_apoteker']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPasien()
    {
        return $this->hasOne(Pasien::className(), ['id_pasien' => 'id_pasien']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApotikResepObats()
    {
        return $this->hasMany(ApotikResepObat::className(), ['id_resep' => 'nomor_resep']);
    }
}
