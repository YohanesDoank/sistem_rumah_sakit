<?php

namespace backend\modules\ranap\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property integer $id_dokter
 * @property string $nama_dokter
 * @property string $spesialis
 * @property string $posisi
 *
 * @property ApotikResep[] $apotikReseps
 * @property RanapRawatInap[] $ranapRawatInaps
 * @property RanapTindakan[] $ranapTindakans
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_dokter', 'spesialis', 'posisi'], 'required'],
            [['nama_dokter'], 'string', 'max' => 100],
            [['spesialis'], 'string', 'max' => 50],
            [['posisi'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dokter' => 'Id Dokter',
            'nama_dokter' => 'Nama Dokter',
            'spesialis' => 'Spesialis',
            'posisi' => 'Posisi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApotikReseps()
    {
        return $this->hasMany(ApotikResep::className(), ['id_dokter' => 'id_dokter']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRanapRawatInaps()
    {
        return $this->hasMany(RanapRawatInap::className(), ['kode_dokter' => 'id_dokter']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRanapTindakans()
    {
        return $this->hasMany(RanapTindakan::className(), ['kode_dokter' => 'id_dokter']);
    }
}
