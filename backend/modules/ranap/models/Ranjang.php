<?php

namespace backend\modules\ranap\models;

use Yii;

/**
 * This is the model class for table "ranap_ranjang".
 *
 * @property string $kode_ranjang
 * @property string $kode_kamar
 * @property integer $status
 */
class Ranjang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ranap_ranjang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_ranjang', 'kode_kamar', 'status'], 'required'],
            [['status'], 'integer'],
            [['kode_ranjang', 'kode_kamar'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_ranjang' => 'Kode Ranjang',
            'kode_kamar' => 'Kode Kamar',
            'status' => 'Status',
        ];
    }
}
