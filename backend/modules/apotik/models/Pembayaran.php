<?php

namespace backend\modules\apotik\models;

use Yii;

/**
 * This is the model class for table "apotik_pembayaran".
 *
 * @property integer $id
 * @property string $status
 * @property integer $nomor_resep
 * @property string $tgl_pembayaran
 * @property integer $total_pembayaran
 * @property string $metode_pembayaran
 *
 * @property Resep $nomorResep
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apotik_pembayaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'nomor_resep', 'metode_pembayaran'], 'required'],
            [['nomor_resep', 'total_pembayaran'], 'integer'],
            [['tgl_pembayaran'], 'safe'],
            [['status', 'metode_pembayaran'], 'string', 'max' => 12],
            [['nomor_resep'], 'exist', 'skipOnError' => true, 'targetClass' => Resep::className(), 'targetAttribute' => ['nomor_resep' => 'nomor_resep']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'nomor_resep' => 'Nomor Resep',
            'tgl_pembayaran' => 'Tgl Pembayaran',
            'total_pembayaran' => 'Total Pembayaran',
            'metode_pembayaran' => 'Metode Pembayaran',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNomorResep()
    {
        return $this->hasOne(Resep::className(), ['nomor_resep' => 'nomor_resep']);
    }
}
