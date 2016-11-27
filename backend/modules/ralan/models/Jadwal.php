<?php

namespace backend\modules\ralan\models;

use Yii;

/**
 * This is the model class for table "ralan_jadwal".
 *
 * @property integer $id_jadwal
 * @property integer $sesi
 * @property string $hari
 * @property integer $ruang
 * @property string $jenis_poli
 * @property integer $status_terisi
 *
 * @property RalanTblpoliklinik[] $ralanTblpolikliniks
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ralan_jadwal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sesi', 'hari', 'ruang', 'jenis_poli', 'status_terisi'], 'required'],
            [['sesi', 'ruang', 'status_terisi'], 'integer'],
            [['hari'], 'string', 'max' => 10],
            [['jenis_poli'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal' => 'Id Jadwal',
            'sesi' => 'Sesi',
            'hari' => 'Hari',
            'ruang' => 'Ruang',
            'jenis_poli' => 'Jenis Poli',
            'status_terisi' => 'Status Terisi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRalanTblpolikliniks()
    {
        return $this->hasMany(RalanTblpoliklinik::className(), ['id_jadwal' => 'id_jadwal']);
    }
}
