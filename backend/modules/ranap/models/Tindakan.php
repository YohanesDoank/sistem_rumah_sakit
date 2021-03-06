<?php

namespace backend\modules\ranap\models;

use Yii;

/**
 * This is the model class for table "ranap_tindakan".
 *
 * @property integer $kode_tindakan
 * @property string $nama_tindakan
 * @property string $tanggal_tindakan
 * @property integer $kode_ranap
 * @property integer $kode_dokter
 * @property integer $kode_penyakit
 * @property string $biaya_tindakan
 * @property string $keterangan
 *
 * @property RanapJenisPenyakit $kodePenyakit
 * @property Dokter $kodeDokter
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ranap_tindakan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_tindakan', 'tanggal_tindakan', 'kode_ranap', 'kode_dokter', 'kode_penyakit', 'biaya_tindakan', 'keterangan'], 'required'],
            [['tanggal_tindakan'], 'safe'],
            [['kode_ranap', 'kode_dokter', 'kode_penyakit'], 'integer'],
            [['biaya_tindakan'], 'number'],
            [['nama_tindakan'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 65],
            [['kode_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => JenisPenyakit::className(), 'targetAttribute' => ['kode_penyakit' => 'kode_penyakit']],
            [['kode_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::className(), 'targetAttribute' => ['kode_dokter' => 'id_dokter']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_tindakan' => 'Kode Tindakan',
            'nama_tindakan' => 'Nama Tindakan',
            'tanggal_tindakan' => 'Tanggal Tindakan',
            'kode_ranap' => 'Kode Ranap',
            'kode_dokter' => 'Kode Dokter',
            'kode_penyakit' => 'Kode Penyakit',
            'biaya_tindakan' => 'Biaya Tindakan',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodePenyakit()
    {
        return $this->hasOne(RanapJenisPenyakit::className(), ['kode_penyakit' => 'kode_penyakit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeDokter()
    {
        return $this->hasOne(Dokter::className(), ['id_dokter' => 'kode_dokter']);
    }
}
