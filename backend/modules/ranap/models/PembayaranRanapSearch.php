<?php

namespace backend\modules\ranap\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ranap\models\PembayaranRanap;

/**
 * PembayaranRanapSearch represents the model behind the search form about `backend\modules\ranap\models\PembayaranRanap`.
 */
class PembayaranRanapSearch extends PembayaranRanap
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_bayar_ranap', 'kode_ranap', 'hari_rawat', 'biaya_obat', 'biaya_kamar', 'biaya_tindakan'], 'integer'],
            [['tanggal_bayar'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PembayaranRanap::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'kode_bayar_ranap' => $this->kode_bayar_ranap,
            'kode_ranap' => $this->kode_ranap,
            'tanggal_bayar' => $this->tanggal_bayar,
            'hari_rawat' => $this->hari_rawat,
            'biaya_obat' => $this->biaya_obat,
            'biaya_kamar' => $this->biaya_kamar,
            'biaya_tindakan' => $this->biaya_tindakan,
        ]);

        return $dataProvider;
    }
}
