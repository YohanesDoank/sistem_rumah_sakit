<?php

namespace backend\modules\ralan\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ralan\models\Medrec;

/**
 * MedrecSearch represents the model behind the search form about `backend\modules\ralan\models\Medrec`.
 */
class MedrecSearch extends Medrec
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mr', 'id_dokter', 'id_pasien', 'no_pendaftaran'], 'integer'],
            [['diagnosa', 'tindakan_dokter', 'keluhan', 'cektensi', 'beratbadan', 'tinggibadan', 'rujukan', 'suhubadan', 'nadi', 'riwayat_operasi', 'alergi_obat', 'status_mr', 'konsultasi'], 'safe'],
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
        $query = Medrec::find();

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
            'id_mr' => $this->id_mr,
            'id_dokter' => $this->id_dokter,
            'id_pasien' => $this->id_pasien,
            'no_pendaftaran' => $this->no_pendaftaran,
        ]);

        $query->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'tindakan_dokter', $this->tindakan_dokter])
            ->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'cektensi', $this->cektensi])
            ->andFilterWhere(['like', 'beratbadan', $this->beratbadan])
            ->andFilterWhere(['like', 'tinggibadan', $this->tinggibadan])
            ->andFilterWhere(['like', 'rujukan', $this->rujukan])
            ->andFilterWhere(['like', 'suhubadan', $this->suhubadan])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'riwayat_operasi', $this->riwayat_operasi])
            ->andFilterWhere(['like', 'alergi_obat', $this->alergi_obat])
            ->andFilterWhere(['like', 'status_mr', $this->status_mr])
            ->andFilterWhere(['like', 'konsultasi', $this->konsultasi]);

        return $dataProvider;
    }
}
