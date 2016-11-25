<?php

namespace backend\modules\apotik\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\apotik\models\ResepObat;

/**
 * ResepObatSearch represents the model behind the search form about `backend\modules\apotik\models\ResepObat`.
 */
class ResepObatSearch extends ResepObat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomor', 'id_resep', 'jumlah'], 'integer'],
            [['kode_obat'], 'safe'],
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
        $query = ResepObat::find();

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
            'nomor' => $this->nomor,
            'id_resep' => $this->id_resep,
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'kode_obat', $this->kode_obat]);

        return $dataProvider;
    }
}
