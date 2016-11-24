<?php

namespace backend\modules\ranap\models;

use Yii;

/**
 * This is the model class for table "ranap_rawat_inap".
 *
 * @property integer $kode_ranap
 * @property integer $kode_pasien
 * @property integer $kode_dokter
 * @property string $kode_ranjang
 * @property string $tanggal_pendaftaran
 * @property string $uang_dp
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ranap_rawat_inap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_pasien', 'kode_dokter', 'kode_ranjang', 'tanggal_pendaftaran', 'uang_dp'], 'required'],
            [['kode_pasien', 'kode_dokter'], 'integer'],
            [['tanggal_pendaftaran'], 'safe'],
            [['uang_dp'], 'number'],
            [['kode_ranjang'], 'string', 'max' => 20],
            [['kode_ranjang'], 'unique'],
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
        ];
    }
}
