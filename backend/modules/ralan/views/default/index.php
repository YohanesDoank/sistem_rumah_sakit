<?php

/* @var $this yii\web\View */

$this->title = 'Sistem Informasi Rumah Sakit - Rawat Jalan';

?>

<?php 

?>
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
                <?php  
                $connection = Yii::$app->db; 
                $command = $connection->createCommand('SELECT count(*) FROM ralan_tblpoliklinik'); 
                $artikelCount = $command->queryScalar();            
                            echo "<h3>" . $artikelCount . "</h3>" ;
                           
                       ?>  

              <p>Poli yang tersedia</p>
                
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href='index.php?r=ralan%2Fpoli' class="small-box-footer">Lihat lebih <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                <?php  
                $connection = Yii::$app->db; 
                $command = $connection->createCommand('SELECT count(*) FROM ranap_ranjang WHERE status = 0'); 
                $artikelCount = $command->queryScalar();            
                            echo "<h3>" . $artikelCount . "</h3>" ;
                           
                       ?>   
              <p>Kamar Tersedia</p>
            </div>
            <div class="icon">
              <i class="fa fa-hospital-o"></i>
            </div>
            <a href="index.php?r=ranap%2Franjang" class="small-box-footer">Lihat data Kamar<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php  
                $connection = Yii::$app->db; 
                $command = $connection->createCommand('SELECT count(*) FROM pasien'); 
                $artikelCount = $command->queryScalar();            
                            echo "<h3>" . $artikelCount . "</h3>" ;
                           
                       ?>     
              
              <p>Jumlah Pasien Terdaftar</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="index.php?r=ranap%2Fpasien" class="small-box-footer">Lihat data Pasien<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <?php  
                $connection = Yii::$app->db; 
                $command = $connection->createCommand('SELECT count(*) FROM dokter'); 
                $artikelCount = $command->queryScalar();            
                            echo "<h3>" . $artikelCount . "</h3>" ;
                           
                       ?>     
              
              <p>Jumlah Dokter Terdaftar</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href="index.php?r=ranap%2Fdokter" class="small-box-footer">Lihat data Dokter<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                    <small class="pull-right">60%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                    <small class="pull-right">40%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <br>
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="revenue-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          </div>
          <!-- /.box -->


        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>