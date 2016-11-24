<?php

namespace backend\modules\ralan\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ralan\models\Pendaftaran;

/**
 * PendaftaranSearch represents the model behind the search form about `backend\modules\ralan\models\Pendaftaran`.
 */
class PendaftaranSearch extends Pendaftaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_pendaftaran', 'id_pasien', 'id_poli', 'id_dokter', 'no_antrian'], 'integer'],
            [['tanggal_pendaftaran'], 'safe'],
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
            'no_pendaftaran' => $this->no_pendaftaran,
            'id_pasien' => $this->id_pasien,
            'tanggal_pendaftaran' => $this->tanggal_pendaftaran,
            'id_poli' => $this->id_poli,
            'id_dokter' => $this->id_dokter,
            'no_antrian' => $this->no_antrian,
        ]);

        return $dataProvider;
    }
}
