<?php

namespace backend\modules\ranap\models;

use Yii;

/**
 * This is the model class for table "ranap_kamar".
 *
 * @property string $kode_kamar
 * @property string $kelas
 * @property integer $kapasitas
 * @property integer $tarif_kamar
 * @property string $keterangan
 */
class Kamar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ranap_kamar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_kamar', 'kelas', 'kapasitas', 'tarif_kamar', 'keterangan'], 'required'],
            [['kapasitas', 'tarif_kamar'], 'integer'],
            [['keterangan'], 'string'],
            [['kode_kamar'], 'string', 'max' => 20],
            [['kelas'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_kamar' => 'Kode Kamar',
            'kelas' => 'Kelas',
            'kapasitas' => 'Kapasitas',
            'tarif_kamar' => 'Tarif Kamar',
            'keterangan' => 'Keterangan',
        ];
    }
}
