<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\modules\apotik\models\Obat;

/* @var $this yii\web\View */
/* @var $model backend\modules\apotik\models\Resep */
/* @var $modelJumlahObat backend\modules\apotik\models\ResepObat */
$id_pasien = $model->id_pasien;
$id_dokter = $model->id_dokter;
$id_apoteker = $model->id_apoteker;
$id = $model->nomor_resep;
$this->title = "Resep no ".$model->nomor_resep;
$this->params['breadcrumbs'][] = ['label' => 'Resep', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nomor_resep], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nomor_resep], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Menu Utama Resep', ['index'], ['class' => 'btn btn-success']) ?>
    </p> 
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-list-alt"></i> RESEP NOMOR <?= $model->nomor_resep ?>
            <small class="pull-right">Tertulis tanggal: <?= $model->resep_tgl ?></small>
          </h2>
        </div>
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Pasien : </strong><?= $this->context->getpasien($id_pasien);  ?><br>
            <b>ID Pasien : </b><?php echo $id_pasien; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Dokter : </strong><?= $this->context->getdokter($id_dokter);  ?><br>
            <b>ID Dokter : </b><?php echo $id_dokter; ?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Apoteker :</b> <?= $this->context->getapoteker($id_apoteker);  ?><br>
          <b>Apoteker ID :</b> <?php echo $id_apoteker; ?><br>
          <b>Account:</b> 968-34567
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama Obat</th>
              <th>Jumlah /Mg</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $result = $this->context->getjumlahobat($id);

                if ($result) {
                    $index = 1;
                    foreach ($result as $row) {
                        ?>
                <tr>
                  <td><?php echo $index; ?></td>
                  <td><?php echo $row['nama_obat']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <?php $index += 1; ?>
                </tr>
            <?php 
                    }
                }
                else{
                    echo "omg";
                }
            ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-8">
          <p class="lead">Alergi Obat :</p>

          <div class="panel panel-success">
              <div class="panel-body" style="padding: 15px 65px 195px 400px; color:black;">
              </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <p class="lead">Cara minum : </p>
          <div class="panel panel-success">
              <div class="panel-body" style="padding: 15px 65px 195px 400px; color:black;">
              </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
    </td>
    <td><section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-list-alt"></i> PEMBAYARAN RESEP KE-n
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-8 invoice-col">
          <address>
            <strong>Pasien : </strong><?= $this->context->getpasien($id_pasien);  ?><br>
            <b>ID Pasien : </b><?php echo $id_pasien; ?><br>
            <b>Tertulis tanggal : </b><?= $model->resep_tgl ?>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama Obat</th>
              <th>Jumlah /Mg</th>
              <th>Harga /Mg</th>
            </tr>
            </thead>
            <tbody>
            <?php 
              $connection = Yii::$app->getDb();
              $command = $connection->createCommand('
                    SELECT nama_obat,harga_satuan, jumlah FROM apotik_obat JOIN apotik_resep_obat ON apotik_obat.kode_obat = apotik_resep_obat.kode_obat AND apotik_resep_obat.id_resep = "'.$id.'"');
              $result = $command->queryAll();
              $total_harga = 0;
                if ($result) {
                    $index = 1;
                    foreach ($result as $row) {
                        ?>
                <tr>
                  <td><?php echo $index; ?></td>
                  <td><?php echo $row['nama_obat']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <td><?php echo $row['harga_satuan']; ?></td>
                  <?php $total_harga += $row['harga_satuan']; ?>
                  <?php $index += 1; ?>
                </tr>
            <?php 
                    }
                }
                else{
                    echo "omg";
                }
            ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Pembayaran dengan :</p>
              <label>
                  <input type="checkbox" value="Tunai">
                  Tunai/Cash
                  <input type="checkbox" value="Gesek">
                  Gesek
              </label>

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
              <tbody><tr>
                <th>Total:</th>
                <td>Rp <?php echo $total_harga; ?></td>
              </tr>
            </tbody></table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
    </td>
                </tr>
            </tbody>
        </table>
    </div>
    

</div>
