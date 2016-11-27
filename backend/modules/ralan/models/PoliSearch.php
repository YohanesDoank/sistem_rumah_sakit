<?php

namespace backend\modules\ralan\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ralan\models\Poli;

/**
 * PoliSearch represents the model behind the search form about `backend\modules\ralan\models\Poli`.
 */
class PoliSearch extends Poli
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_poli', 'id_dokter', 'id_jadwal'], 'integer'],
            [['nama_poli'], 'safe'],
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
        $query = Poli::find();

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
            'id_poli' => $this->id_poli,
            'id_dokter' => $this->id_dokter,
            'id_jadwal' => $this->id_jadwal,
        ]);

        $query->andFilterWhere(['like', 'nama_poli', $this->nama_poli]);

        return $dataProvider;
    }
}
