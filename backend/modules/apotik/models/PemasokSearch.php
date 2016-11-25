<?php

namespace backend\modules\apotik\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\apotik\models\Pemasok;

/**
 * PemasokSearch represents the model behind the search form about `backend\modules\apotik\models\Pemasok`.
 */
class PemasokSearch extends Pemasok
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pemasok', 'nama', 'no_telp', 'alamat'], 'safe'],
            [['id_admin'], 'integer'],
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
        $query = Pemasok::find();

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
            'id_admin' => $this->id_admin,
        ]);        

        // grid filtering conditions
        $query->andFilterWhere(['like', 'id_pemasok', $this->id_pemasok])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
