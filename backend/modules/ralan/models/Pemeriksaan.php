<?php

namespace backend\modules\ralan\models;

use Yii;

/**
 * This is the model class for table "ralan_tblpemeriksaandokter".
 *
 * @property integer $id_pemeriksaan
 * @property integer $id_medrec
 * @property integer $id_pasien
 * @property integer $id_dokter
 * @property integer $jenis_pemeriksaan
 * @property string $tanggal_pemeriksaan
 * @property double $total_biaya_pemeriksaan
 * @property string $status_pemeriksaan
 *
 * @property RalanTblmedicalrecord $idMedrec
 */
class Pemeriksaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ralan_tblpemeriksaandokter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_medrec', 'id_pasien', 'id_dokter', 'jenis_pemeriksaan', 'tanggal_pemeriksaan', 'total_biaya_pemeriksaan', 'status_pemeriksaan'], 'required'],
            [['id_medrec', 'id_pasien', 'id_dokter', 'jenis_pemeriksaan'], 'integer'],
            [['tanggal_pemeriksaan'], 'safe'],
            [['total_biaya_pemeriksaan'], 'number'],
            [['status_pemeriksaan'], 'string', 'max' => 100],
            [['id_medrec'], 'exist', 'skipOnError' => true, 'targetClass' => Medrec::className(), 'targetAttribute' => ['id_medrec' => 'id_mr']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pemeriksaan' => 'Id Pemeriksaan',
            'id_medrec' => 'Id Medrec',
            'id_pasien' => 'Id Pasien',
            'id_dokter' => 'Id Dokter',
            'jenis_pemeriksaan' => 'Jenis Pemeriksaan',
            'tanggal_pemeriksaan' => 'Tanggal Pemeriksaan',
            'total_biaya_pemeriksaan' => 'Total Biaya Pemeriksaan',
            'status_pemeriksaan' => 'Status Pemeriksaan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMedrec()
    {
        return $this->hasOne(Medrec::className(), ['id_mr' => 'id_medrec']);
    }
}
