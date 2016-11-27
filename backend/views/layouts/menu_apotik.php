<?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Apotik', 'options' => ['class' => 'header']],
                    ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'url' => 'index.php?r=apotik'],
                    ['label' => 'Antrian', 'icon' => 'fa fa-wheelchair-alt', 'url' => 'index.php?r=apotik/antrian'],
                    ['label' => 'Resep', 'icon' => 'fa fa-list', 'url' => '#',
                        'items' => [
                            ['label' => 'Data Resep', 'icon' => 'fa fa-list-alt', 'url' => 'index.php?r=apotik/resep'],
                            ['label' => 'Obat Resep', 'icon' => 'fa fa-plus-square-o', 'url' => 'index.php?r=apotik/resep-obat'],
                        ],
                    ],
                    
                    ['label' => 'Data Obat', 'icon' => 'fa fa-plus-square', 'url' => 'index.php?r=apotik/obat'],
                    ['label' => 'Apoteker', 'icon' => 'fa fa-user-circle', 'url' => 'index.php?r=apotik/apoteker'],
                    ['label' => 'Pemasok', 'icon' => 'fa fa-user-circle-o', 'url' => 'index.php?r=apotik/pemasok'],
                    ['label' => 'Manajemen User', 'icon' => 'fa fa-user', 'url' => '#',
                        'items' => [
                            ['label' => 'Pasien', 'icon' => 'fa fa-user-o', 'url' => 'index.php?r=apotik/pasien'],
                            ['label' => 'Dokter', 'icon' => 'fa fa-user-md', 'url' => 'index.php?r=apotik/dokter'],
                        ],
                    ],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                        ],
                    ],
                ],
            ]
        ) ?>
