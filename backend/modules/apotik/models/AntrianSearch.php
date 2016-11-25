<?php

namespace backend\modules\apotik\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\apotik\models\Antrian;

/**
 * AntrianSearch represents the model behind the search form about `backend\modules\apotik\models\Antrian`.
 */
class AntrianSearch extends Antrian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomor', 'nomor_resep'], 'integer'],
            [['tanggal_antrian'], 'safe'],
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
        $query = Antrian::find();

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
            'nomor_resep' => $this->nomor_resep,
            'tanggal_antrian' => $this->tanggal_antrian,
        ]);

        return $dataProvider;
    }
}
