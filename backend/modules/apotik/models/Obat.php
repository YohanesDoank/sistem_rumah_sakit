<?php

namespace backend\modules\apotik\models;

use Yii;

/**
 * This is the model class for table "apotik_obat".
 *
 * @property integer $kode_obat
 * @property string $nama_obat
 * @property string $jenis_obat
 * @property string $indikasi_obat
 * @property string $kontraindikasi_obat
 * @property string $adverse_drug_reaction
 * @property string $cara_minum
 * @property integer $harga_satuan
 * @property string $tgl_kadaluarsa
 * @property integer $stok
 * @property string $id_pemasok_obat
 * @property integer $id_admin
 *
 * @property Pemasok $idPemasokObat
 * @property Admin $idAdmin
 * @property ResepObat[] $apotikResepObats
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apotik_obat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_obat', 'jenis_obat', 'cara_minum', 'harga_satuan', 'tgl_kadaluarsa', 'stok', 'id_pemasok_obat', 'id_admin'], 'required'],
            [['indikasi_obat', 'kontraindikasi_obat'], 'string'],
            [['stok', 'id_admin'], 'integer'],
            [['tgl_kadaluarsa'], 'safe'],
            [['nama_obat', 'adverse_drug_reaction', 'cara_minum', 'id_pemasok_obat'], 'string', 'max' => 255],
            [['jenis_obat'], 'string', 'max' => 100],
            [['id_pemasok_obat'], 'exist', 'skipOnError' => true, 'targetClass' => Pemasok::className(), 'targetAttribute' => ['id_pemasok_obat' => 'id_pemasok']],
            [['id_admin'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['id_admin' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_obat' => 'Kode Obat',
            'nama_obat' => 'Nama Obat',
            'jenis_obat' => 'Jenis Obat',
            'indikasi_obat' => 'Indikasi Obat',
            'kontraindikasi_obat' => 'Kontraindikasi Obat',
            'adverse_drug_reaction' => 'Adverse Drug Reaction',
            'cara_minum' => 'Cara Minum',
            'harga_satuan' => 'Harga Satuan',
            'tgl_kadaluarsa' => 'Tanggal Kadaluarsa',
            'stok' => 'Stok',
            'id_pemasok_obat' => 'Id Pemasok Obat',
            'id_admin' => 'Id Admin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPemasokObat()
    {
        return $this->hasOne(Pemasok::className(), ['id_pemasok' => 'id_pemasok_obat']);
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
    public function getApotikResepObats()
    {
        return $this->hasMany(ResepObat::className(), ['kode_obat' => 'kode_obat']);
    }
}
