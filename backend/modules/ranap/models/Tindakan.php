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
}
