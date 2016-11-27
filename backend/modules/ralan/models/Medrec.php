<?php

namespace backend\modules\ralan\models;

use Yii;

/**
 * This is the model class for table "ralan_tblmedicalrecord".
 *
 * @property integer $id_mr
 * @property integer $id_dokter
 * @property integer $id_pasien
 * @property integer $no_pendaftaran
 * @property string $diagnosa
 * @property string $tindakan_dokter
 * @property string $keluhan
 * @property string $cektensi
 * @property string $beratbadan
 * @property string $tinggibadan
 * @property string $rujukan
 * @property string $suhubadan
 * @property string $nadi
 * @property string $riwayat_operasi
 * @property string $alergi_obat
 * @property string $status_mr
 * @property string $konsultasi
 *
 * @property RalanTblpendaftaran $noPendaftaran
 * @property RalanTblpemeriksaandokter[] $ralanTblpemeriksaandokters
 */
class Medrec extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ralan_tblmedicalrecord';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_dokter', 'id_pasien', 'no_pendaftaran', 'diagnosa', 'tindakan_dokter', 'keluhan', 'cektensi', 'beratbadan', 'tinggibadan', 'rujukan', 'suhubadan', 'nadi', 'riwayat_operasi', 'alergi_obat', 'status_mr', 'konsultasi'], 'required'],
            [['id_dokter', 'id_pasien', 'no_pendaftaran'], 'integer'],
            [['diagnosa'], 'string', 'max' => 250],
            [['tindakan_dokter', 'keluhan', 'riwayat_operasi', 'alergi_obat'], 'string', 'max' => 200],
            [['cektensi', 'status_mr'], 'string', 'max' => 50],
            [['beratbadan', 'tinggibadan', 'suhubadan', 'nadi'], 'string', 'max' => 10],
            [['rujukan'], 'string', 'max' => 150],
            [['konsultasi'], 'string', 'max' => 100],
            [['no_pendaftaran'], 'exist', 'skipOnError' => true, 'targetClass' => Pendaftaran::className(), 'targetAttribute' => ['no_pendaftaran' => 'no_pendaftaran']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mr' => 'Id Mr',
            'id_dokter' => 'Id Dokter',
            'id_pasien' => 'Id Pasien',
            'no_pendaftaran' => 'No Pendaftaran',
            'diagnosa' => 'Diagnosa',
            'tindakan_dokter' => 'Tindakan Dokter',
            'keluhan' => 'Keluhan',
            'cektensi' => 'Cektensi',
            'beratbadan' => 'Beratbadan',
            'tinggibadan' => 'Tinggibadan',
            'rujukan' => 'Rujukan',
            'suhubadan' => 'Suhubadan',
            'nadi' => 'Nadi',
            'riwayat_operasi' => 'Riwayat Operasi',
            'alergi_obat' => 'Alergi Obat',
            'status_mr' => 'Status Mr',
            'konsultasi' => 'Konsultasi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoPendaftaran()
    {
        return $this->hasOne(Pendaftaran::className(), ['no_pendaftaran' => 'no_pendaftaran']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRalanTblpemeriksaandokters()
    {
        return $this->hasMany(Pemeriksaan::className(), ['id_medrec' => 'id_mr']);
    }

    // public static function dropdown()
    // {   
    //     //get and cache data
    //     static $dropdown;
    //     if($dropdown === null){
    //         //get all record from database and generate
    //         $models = static::find()->all();
    //         foreach($models as $model){
    //             $dropdown($model->id) = $model->medrec;
    //         }
    //     }

    //     return $dropdown;
    // }
}
