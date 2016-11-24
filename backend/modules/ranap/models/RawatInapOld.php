<?php

namespace backend\modules\ranap\models;

use Yii;

/**
 * This is the model class for table "ranap_rawat_inap_old".
 *
 * @property integer $kode_ranap
 * @property integer $kode_pasien
 * @property integer $kode_dokter
 * @property string $kode_ranjang
 * @property string $tanggal_pendaftaran
 * @property string $uang_dp
 * @property string $tanggal_keluar
 *
 * @property RanapPembayaranRanap[] $ranapPembayaranRanaps
 */
class RawatInapOld extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ranap_rawat_inap_old';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_pasien', 'kode_dokter', 'kode_ranjang', 'tanggal_pendaftaran', 'uang_dp', 'tanggal_keluar'], 'required'],
            [['kode_pasien', 'kode_dokter'], 'integer'],
            [['tanggal_pendaftaran', 'tanggal_keluar'], 'safe'],
            [['uang_dp'], 'number'],
            [['kode_ranjang'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_ranap' => 'Kode Ranap',
            'kode_pasien' => 'Kode Pasien',
            'kode_dokter' => 'Kode Dokter',
            'kode_ranjang' => 'Kode Ranjang',
            'tanggal_pendaftaran' => 'Tanggal Pendaftaran',
            'uang_dp' => 'Uang Dp',
            'tanggal_keluar' => 'Tanggal Keluar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRanapPembayaranRanaps()
    {
        return $this->hasMany(RanapPembayaranRanap::className(), ['kode_ranap' => 'kode_ranap']);
    }
}
