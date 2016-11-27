<?php

namespace backend\modules\apotik\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\apotik\models\Obat;

/**
 * ObatSearch represents the model behind the search form about `backend\modules\apotik\models\Obat`.
 */
class ObatSearch extends Obat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_obat', 'harga_satuan', 'stok', 'id_admin'], 'integer'],
            [['nama_obat', 'jenis_obat', 'indikasi_obat', 'kontraindikasi_obat', 'adverse_drug_reaction', 'cara_minum', 'tgl_kadaluarsa', 'id_pemasok_obat'], 'safe'],
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
        $query = Obat::find();

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
            'kode_obat' => $this->kode_obat,
            'harga_satuan' => $this->harga_satuan,
            'tgl_kadaluarsa' => $this->tgl_kadaluarsa,
            'stok' => $this->stok,
            'id_admin' => $this->id_admin,
        ]);

        $query->andFilterWhere(['like', 'nama_obat', $this->nama_obat])
            ->andFilterWhere(['like', 'jenis_obat', $this->jenis_obat])
            ->andFilterWhere(['like', 'indikasi_obat', $this->indikasi_obat])
            ->andFilterWhere(['like', 'kontraindikasi_obat', $this->kontraindikasi_obat])
            ->andFilterWhere(['like', 'adverse_drug_reaction', $this->adverse_drug_reaction])
            ->andFilterWhere(['like', 'cara_minum', $this->cara_minum])
            ->andFilterWhere(['like', 'id_pemasok_obat', $this->id_pemasok_obat]);

        return $dataProvider;
    }
}
