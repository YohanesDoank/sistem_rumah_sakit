<?php

namespace backend\modules\ranap\models;

use Yii;

/**
 * This is the model class for table "ranap_jenis_penyakit".
 *
 * @property integer $kode_penyakit
 * @property string $nama_penyakit
 * @property string $keterangan
 */
class JenisPenyakit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ranap_jenis_penyakit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_penyakit'], 'required'],
            [['nama_penyakit'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 65],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_penyakit' => 'Kode Penyakit',
            'nama_penyakit' => 'Nama Penyakit',
            'keterangan' => 'Keterangan',
        ];
    }
}
