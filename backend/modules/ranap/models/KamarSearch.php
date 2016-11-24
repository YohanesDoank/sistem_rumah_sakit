<?php

namespace backend\modules\ranap\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ranap\models\Kamar;

/**
 * KamarSearch represents the model behind the search form about `backend\modules\ranap\models\Kamar`.
 */
class KamarSearch extends Kamar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_kamar', 'kelas', 'keterangan'], 'safe'],
            [['kapasitas', 'tarif_kamar'], 'integer'],
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
        $query = Kamar::find();

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
            'kapasitas' => $this->kapasitas,
            'tarif_kamar' => $this->tarif_kamar,
        ]);

        $query->andFilterWhere(['like', 'kode_kamar', $this->kode_kamar])
            ->andFilterWhere(['like', 'kelas', $this->kelas])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
