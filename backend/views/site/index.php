<?php

/* @var $this yii\web\View */

$this->title = 'Sistem Informasi Rumah Sakit';
?>
<?php 
	$cekrole = Yii::$app->user->identity->role; 
	if ($cekrole == "ranap") {
		$cekrole == "Rawat Inap";
	}
	elseif ($cekrole == "ralan") {
		$cekrole == "Rawat Jalan";
	}
	else{
		$cekrole == "Apotik";	
	}
?>
<b>[Divisi <?php echo ucfirst($cekrole); ?>]</b>
<div class="site-index">

    <div class="jumbotron">
        <h1>Selamat Datang !</h1>

        <p class="lead">Inilah home <?php echo $cekrole; ?></p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Let's GO!</a></p>
    </div>

    <div class="body-content">
    <!-- kosong -->
    </div>
</div>
