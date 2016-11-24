<?php

namespace backend\modules\ranap\models;

use Yii;

/**
 * This is the model class for table "ranap_dokter".
 *
 * @property integer $kode_dokter
 * @property string $nama_dokter
 * @property string $alamat
 * @property string $no_telp
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ranap_dokter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_dokter', 'alamat', 'no_telp'], 'required'],
            [['nama_dokter', 'alamat'], 'string', 'max' => 50],
            [['no_telp'], 'string', 'max' => 14],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_dokter' => 'Kode Dokter',
            'nama_dokter' => 'Nama Dokter',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
        ];
    }
}
