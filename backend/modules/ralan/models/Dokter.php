<?php

namespace backend\modules\ralan\models;

use Yii;

/**
 * This is the model class for table "ralan_tbldokter".
 *
 * @property integer $id_dokter
 * @property string $nama_dokter
 * @property string $spesialis
 *
 * @property RalanTblmedicalrecord[] $ralanTblmedicalrecords
 * @property RalanTblpemeriksaandokter[] $ralanTblpemeriksaandokters
 * @property RalanTblpendaftaran[] $ralanTblpendaftarans
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
            [['nama_dokter', 'spesialis'], 'required'],
            [['nama_dokter'], 'string', 'max' => 30],
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
            'posisi' =>'Posisi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRalanTblmedicalrecord()
    {
        return $this->hasMany(Medrec::className(), ['id_dokter' => 'id_dokter']);
    }

    // public static function dropdown()
    // {   
    //     //get and cache data
    //     static $dropdown;
    //     if($dropdown === null){
    //         //get all record from database and generate
    //         $models = static::find()->all();
    //         foreach($models as $model){
    //             $dropdown($model->id) = $model->dokter;
    //         }
    //     }

    //     return $dropdown;
    // }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRalanTblpemeriksaandokter()
    {
        return $this->hasMany(Dokter::className(), ['id_dokter' => 'id_dokter']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRalanTblpendaftaran()
    {
        return $this->hasMany(Pendaftaran::className(), ['id_dokter' => 'id_dokter']);
    }
}
