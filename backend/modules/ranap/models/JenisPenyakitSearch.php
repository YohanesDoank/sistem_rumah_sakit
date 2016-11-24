<?php

namespace backend\modules\ranap\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ranap\models\JenisPenyakit;

/**
 * JenisPenyakitSearch represents the model behind the search form about `backend\modules\ranap\models\JenisPenyakit`.
 */
class JenisPenyakitSearch extends JenisPenyakit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_penyakit'], 'integer'],
            [['nama_penyakit', 'keterangan'], 'safe'],
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
        $query = JenisPenyakit::find();

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
            'kode_penyakit' => $this->kode_penyakit,
        ]);

        $query->andFilterWhere(['like', 'nama_penyakit', $this->nama_penyakit])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
