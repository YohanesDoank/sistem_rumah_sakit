<?php

namespace backend\modules\ralan\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ralan\models\Pemeriksaan;

/**
 * PemeriksaanSearch represents the model behind the search form about `backend\modules\ralan\models\Pemeriksaan`.
 */
class PemeriksaanSearch extends Pemeriksaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pemeriksaan', 'id_medrec', 'id_pasien', 'id_dokter', 'jenis_pemeriksaan'], 'integer'],
            [['tanggal_pemeriksaan', 'status_pemeriksaan'], 'safe'],
            [['total_biaya_pemeriksaan'], 'number'],
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
        $query = Pemeriksaan::find();

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
            'id_pemeriksaan' => $this->id_pemeriksaan,
            'id_medrec' => $this->id_medrec,
            'id_pasien' => $this->id_pasien,
            'id_dokter' => $this->id_dokter,
            'jenis_pemeriksaan' => $this->jenis_pemeriksaan,
            'tanggal_pemeriksaan' => $this->tanggal_pemeriksaan,
            'total_biaya_pemeriksaan' => $this->total_biaya_pemeriksaan,
        ]);

        $query->andFilterWhere(['like', 'status_pemeriksaan', $this->status_pemeriksaan]);

        return $dataProvider;
    }
}
