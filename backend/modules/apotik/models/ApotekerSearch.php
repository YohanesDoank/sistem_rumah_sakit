<?php

namespace backend\modules\apotik\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\apotik\models\apoteker;

/**
 * ApotekerSearch represents the model behind the search form about `backend\modules\apotik\models\apoteker`.
 */
class ApotekerSearch extends apoteker
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_apoteker', 'no_telp', 'id_admin'], 'integer'],
            [['nama', 'alamat', 'jam_mulai', 'jam_selesai'], 'safe'],
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
        $query = apoteker::find();

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
        $query->andFilterWhere([
            'id_apoteker' => $this->id_apoteker,
            'no_telp' => $this->no_telp,
            'jam_mulai' => $this->jam_mulai,
            'jam_selesai' => $this->jam_selesai,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
