<?php

namespace backend\modules\apotik\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\apotik\models\Resep;

/**
 * ResepSearch represents the model behind the search form about `backend\modules\apotik\models\Resep`.
 */
class ResepSearch extends Resep
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomor_resep', 'id_pasien', 'id_dokter', 'id_apoteker', 'id_admin'], 'integer'],
            [['resep_tgl'], 'safe'],
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
        $query = Resep::find();

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
            'nomor_resep' => $this->nomor_resep,
            'id_pasien' => $this->id_pasien,
            'id_dokter' => $this->id_dokter,
            'id_apoteker' => $this->id_apoteker,
            'resep_tgl' => $this->resep_tgl,
        ]);

        return $dataProvider;
    }
}
