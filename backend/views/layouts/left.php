<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <!-- cek gambar based on role -->
                <?php $gambar = '';
                    if(Yii::$app->user->identity->role == "ranap") {$gambar = "/img/ranap.jpg";}
                    elseif(Yii::$app->user->identity->role == "ralan") {$gambar = "/img/ralan.jpg";}
                    elseif(Yii::$app->user->identity->role == "apotik") {$gambar = "/img/apotik.jpg";}
                ?>
                <img src="<?= $directoryAsset ?><?php echo $gambar; ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= ucfirst(Yii::$app->user->identity->username); ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- PENGALIHAN MENU SESUAI ROLE -->
        <?php if(Yii::$app->user->identity->role == "ranap"){ ?>
                <?= $this->render('menu_ranap.php',['directoryAsset' => $directoryAsset]); ?>
            <?php } elseif(Yii::$app->user->identity->role == "ralan"){?>
                <?= $this->render('menu_ralan.php',['directoryAsset' => $directoryAsset]); ?>
            <?php } elseif(Yii::$app->user->identity->role == "apotik"){ ?>
                <?= $this->render('menu_apotik.php',['directoryAsset' => $directoryAsset]); ?>
                <?php } ?>
    </section>

</aside>
