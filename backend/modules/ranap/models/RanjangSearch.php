<?php

namespace backend\modules\ranap\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ranap\models\Ranjang;

/**
 * RanjangSearch represents the model behind the search form about `backend\modules\ranap\models\Ranjang`.
 */
class RanjangSearch extends Ranjang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_ranjang', 'kode_kamar'], 'safe'],
            [['status'], 'integer'],
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
        $query = Ranjang::find();

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'kode_ranjang', $this->kode_ranjang])
            ->andFilterWhere(['like', 'kode_kamar', $this->kode_kamar]);

        return $dataProvider;
    }
}
