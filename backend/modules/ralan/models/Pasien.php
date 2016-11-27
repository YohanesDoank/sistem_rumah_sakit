<?php

namespace backend\modules\ralan\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property integer $id_pasien
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $jenis_kelamin
 * @property string $gol_dar
 * @property string $no_telpon
 * @property string $alamat
 * @property string $pekerjaan
 * @property string $tgl_daftar
 * @property string $status
 * @property integer $id_admin
 *
 * @property ApotikResep[] $apotikReseps
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
            [['nama', 'tgl_lahir', 'jenis_kelamin', 'gol_dar', 'no_telpon', 'alamat', 'pekerjaan', 'status', 'id_admin'], 'required'],
            [['tgl_lahir', 'tgl_daftar'], 'safe'],
            [['id_admin'], 'integer'],
            [['nama', 'pekerjaan'], 'string', 'max' => 50],
            [['jenis_kelamin', 'status'], 'string', 'max' => 1],
            [['gol_dar'], 'string', 'max' => 2],
            [['no_telpon'], 'string', 'max' => 22],
            [['alamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama' => 'Nama',
            'tgl_lahir' => 'Tgl Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'gol_dar' => 'Gol Dar',
            'no_telpon' => 'No Telpon',
            'alamat' => 'Alamat',
            'pekerjaan' => 'Pekerjaan',
            'tgl_daftar' => 'Tgl Daftar',
            'status' => 'Status',
            'id_admin' => 'Id Admin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApotikReseps()
    {
        return $this->hasMany(ApotikResep::className(), ['id_pasien' => 'id_pasien']);
    }

    // public static function dropdown()
    // {   
    //     //get and cache data
    //     static $dropdown;
    //     if($dropdown === null){
    //         //get all record from database and generate
    //         $models = static::find()->all();
    //         foreach($models as $model){
    //             $dropdown($model->id) = $model->pasien;
    //         }
    //     }

    //     return $dropdown;
    // }
}
