<?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Rawat Inap', 'options' => ['class' => 'header']],
                    ['label' => 'Menu Utama', 'icon' => 'fa fa-registered', 'url' => ['/ranap/']],
                    ['label' => 'Pendaftaran Rawat Inap', 'icon' => 'fa fa-address-card-o', 'url' => ['/ranap/pendaftaran/create'],
                        'items' => [
                            ['label' => 'Data Rawat Inap', 'icon' => 'fa fa-circle-o', 'url' => ['/ranap/pendaftaran']],
                            ['label' => 'History Rawat Inap', 'icon' => 'fa fa-circle-o', 'url' => ['/ranap/rawat-inap-old']]

                            ],
                    ],
                    ['label' => 'Tindakan', 'icon' => 'fa fa-medkit', 'url' => '#',
                        'items' => [
                            ['label' => 'Data Tindakan', 'icon' => 'fa fa-circle-o', 'url' => ['/ranap/tindakan']],
                            ['label' => 'History Tindakan', 'icon' => 'fa fa-circle-o', 'url' => ['/ranap/tindakan-old']]

                            ],
                    ],
                    ['label' => 'Pasien', 'icon' => 'fa fa-user-circle-o', 'url' => ['/ranap/pasien']],
                    ['label' => 'Dokter', 'icon' => 'fa fa-user-md', 'url' => ['/ranap/dokter']],
                    ['label' => 'Kamar', 'icon' => 'fa fa-hospital-o', 'url' => '#',
                        'items' => [
                            ['label' => 'Daftar Kamar', 'icon' => 'fa fa-circle-o', 'url' => ['/ranap/kamar']],
                            ['label' => 'Daftar Ranjang', 'icon' => 'fa fa-circle-o', 'url' => ['/ranap/ranjang']]
                            ],
                    ],

                    ['label' => 'Jenis Penyakit', 'icon' => 'fa fa-umbrella', 'url' => ['/ranap/jenis-penyakit']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Level One', 'icon' => 'fa fa-circle-o', 'url' => '#',
                        'items' => [
                            ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#']
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
