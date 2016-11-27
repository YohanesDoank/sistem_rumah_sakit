<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p> <?= Yii::$app->user->identity->username;  ?></p>

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

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Admin', 'options' => ['class' => 'header']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Menu Utama Rawat Jalan', 'icon' => 'fa fa-registered', 'url' => ['/site']],
                    
                    [
                        'label' => 'Manajemen Rawat Jalan',
                        'icon' => 'fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Dokter', 'icon' => 'fa fa-user-md', 'url' => ['/ralan/dokter']],
                            ['label' => 'Medical Record', 'icon' => 'fa fa-address-card-o', 'url' => ['/ralan/medrec']],
                            ['label' => 'Pasien', 'icon' => 'fa fa-user-md', 'icon' => 'fa fa-user-circle-o', 'url' => ['/ralan/pasien']],
                            ['label' => 'Pemeriksaan Dokter', 'icon' => 'fa fa-medkit', 'url' => ['/ralan/pemeriksaan']],
                            ['label' => 'pendaftaran', 'icon' => 'fa fa-address-card-o', 'url' => ['/ralan/pendaftaran']],
                            ['label' => 'poli', 'icon' => 'fa fa-user-md', 'url' => ['/ralan/poli']],
                        ]
                    ],

                    [
                        'label' => 'Same tools',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
