<?php

namespace backend\modules\ranap\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ranap\models\Pendaftaran;

/**
 * PendaftaranSearch represents the model behind the search form about `backend\modules\ranap\models\Pendaftaran`.
 */
class PendaftaranSearch extends Pendaftaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_ranap', 'kode_pasien', 'kode_dokter'], 'integer'],
            [['kode_ranjang', 'tanggal_pendaftaran'], 'safe'],
            [['uang_dp'], 'number'],
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
        $query = Pendaftaran::find();

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
            'kode_ranap' => $this->kode_ranap,
            'kode_pasien' => $this->kode_pasien,
            'kode_dokter' => $this->kode_dokter,
            'tanggal_pendaftaran' => $this->tanggal_pendaftaran,
            'uang_dp' => $this->uang_dp,
        ]);

        $query->andFilterWhere(['like', 'kode_ranjang', $this->kode_ranjang]);

        return $dataProvider;
    }
}
