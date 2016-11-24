<?php

namespace backend\modules\ranap\models;

use Yii;

/**
 * This is the model class for table "ranap_pasien".
 *
 * @property integer $kode_pasien
 * @property string $nama_pasien
 * @property string $alamat
 * @property string $no_telp
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $golongan_darah
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'alamat', 'no_telp', 'tanggal_lahir', 'jenis_kelamin', 'golongan_darah'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['nama_pasien', 'alamat'], 'string', 'max' => 50],
            [['no_telp'], 'string', 'max' => 14],
            [['jenis_kelamin'], 'string', 'max' => 1],
            [['golongan_darah'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_pasien' => 'Kode Pasien',
            'nama_pasien' => 'Nama Pasien',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'golongan_darah' => 'Golongan Darah',
        ];
    }
}
