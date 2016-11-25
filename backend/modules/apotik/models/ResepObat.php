<?php

namespace backend\modules\apotik\models;

use Yii;

/**
 * This is the model class for table "apotik_resep_obat".
 *
 * @property integer $nomor
 * @property integer $id_resep
 * @property string $kode_obat
 * @property integer $jumlah
 *
 * @property Obat $kodeObat
 * @property Resep $idResep
 */
class ResepObat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apotik_resep_obat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jumlah'], 'required'],
            [['id_resep', 'jumlah'], 'integer'],
            [['kode_obat'], 'string', 'max' => 100],
            [['kode_obat'], 'exist', 'skipOnError' => true, 'targetClass' => Obat::className(), 'targetAttribute' => ['kode_obat' => 'kode_obat']],
            [['id_resep'], 'exist', 'skipOnError' => true, 'targetClass' => Resep::className(), 'targetAttribute' => ['id_resep' => 'nomor_resep']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nomor' => 'Nomor',
            'id_resep' => 'Id Resep',
            'kode_obat' => 'Kode Obat',
            'jumlah' => 'Jumlah mg',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeObat()
    {
        return $this->hasOne(Obat::className(), ['kode_obat' => 'kode_obat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdResep()
    {
        return $this->hasOne(Resep::className(), ['nomor_resep' => 'id_resep']);
    }
}
