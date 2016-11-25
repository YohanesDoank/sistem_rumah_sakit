<?php

namespace backend\modules\apotik\models;

use Yii;

/**
 * This is the model class for table "apotik_antrian".
 *
 * @property integer $nomor
 * @property integer $nomor_resep
 * @property string $tanggal_antrian
 *
 * @property ApotikResep $nomorResep
 */
class Antrian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apotik_antrian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomor_resep', 'tanggal_antrian'], 'required'],
            [['nomor_resep'], 'integer'],
            [['tanggal_antrian'], 'safe'],
            [['nomor_resep'], 'exist', 'skipOnError' => true, 'targetClass' => Resep::className(), 'targetAttribute' => ['nomor_resep' => 'nomor_resep']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nomor' => 'Nomor',
            'nomor_resep' => 'Nomor Resep',
            'tanggal_antrian' => 'Tanggal Antrian',
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
