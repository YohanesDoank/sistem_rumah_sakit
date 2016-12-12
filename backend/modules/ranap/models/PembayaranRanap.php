<?php

namespace backend\modules\ranap\models;

use Yii;

/**
 * This is the model class for table "ranap_pembayaran_ranap".
 *
 * @property integer $kode_bayar_ranap
 * @property integer $kode_ranap
 * @property string $tanggal_bayar
 * @property integer $hari_rawat
 * @property integer $biaya_obat
 * @property integer $biaya_kamar
 * @property integer $biaya_tindakan
 *
 * @property RanapRawatInapOld $kodeRanap
 */
class PembayaranRanap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ranap_pembayaran_ranap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_bayar_ranap', 'kode_ranap', 'hari_rawat', 'biaya_obat', 'biaya_kamar', 'biaya_tindakan'], 'required'],
            [['kode_bayar_ranap', 'kode_ranap', 'hari_rawat', 'biaya_obat', 'biaya_kamar', 'biaya_tindakan'], 'integer'],
            [['tanggal_bayar'], 'safe'],
            [['kode_ranap'], 'exist', 'skipOnError' => true, 'targetClass' => RawatInapOld::className(), 'targetAttribute' => ['kode_ranap' => 'kode_ranap']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_bayar_ranap' => 'Kode Bayar Ranap',
            'kode_ranap' => 'Kode Ranap',
            'tanggal_bayar' => 'Tanggal Bayar',
            'hari_rawat' => 'Hari Rawat',
            'biaya_obat' => 'Biaya Obat',
            'biaya_kamar' => 'Biaya Kamar',
            'biaya_tindakan' => 'Biaya Tindakan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeRanap()
    {
        return $this->hasOne(RanapRawatInapOld::className(), ['kode_ranap' => 'kode_ranap']);
    }
}
