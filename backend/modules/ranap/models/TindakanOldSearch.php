<?php

namespace backend\modules\ranap\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ranap\models\TindakanOld;

/**
 * TindakanOldSearch represents the model behind the search form about `backend\modules\ranap\models\TindakanOld`.
 */
class TindakanOldSearch extends TindakanOld
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_tindakan', 'kode_ranap', 'kode_dokter', 'kode_penyakit'], 'integer'],
            [['nama_tindakan', 'tanggal_tindakan', 'keterangan'], 'safe'],
            [['biaya_tindakan'], 'number'],
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
        $query = TindakanOld::find();

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
            'kode_tindakan' => $this->kode_tindakan,
            'tanggal_tindakan' => $this->tanggal_tindakan,
            'kode_ranap' => $this->kode_ranap,
            'kode_dokter' => $this->kode_dokter,
            'kode_penyakit' => $this->kode_penyakit,
            'biaya_tindakan' => $this->biaya_tindakan,
        ]);

        $query->andFilterWhere(['like', 'nama_tindakan', $this->nama_tindakan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
