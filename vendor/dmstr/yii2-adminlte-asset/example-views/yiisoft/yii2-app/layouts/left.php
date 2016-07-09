<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= $userName->username ?></p>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Home', 'icon' => 'fa fa-dashboard', 'url' => ['/site/index']],
                		
                    ['label' => 'Student', 'icon' => 'fa fa-dashboard', 
                    		'url' => '#',
                    		'items'=>[
                    				['label'=>'View','icon'=>'fa fa-dashboard','url'=>['/student/students/index']],
                    				['label'=>'Add Student','icon'=>'fa fa-dashboard','url'=>['/student/students/create']],
                    		]
                    		
                    ],
                		
                    ['label' => 'Employee', 'icon' => 'fa fa-dashboard', 
                    		'url' => '#',
                    		'items'=>[
                    				['label'=>'View','icon'=>'fa fa-dashboard','url'=>['/employee/employees/index']],
                    				['label'=>'Add employee','icon'=>'fa fa-dashboard','url'=>['/employee/employees/create']],
                    		]
                    		
                    ],
                		
                    ['label' => 'Course', 'icon' => 'fa fa-dashboard',
                    		'url' => '#',
                    		'items'=>[
                    				['label'=>'View','icon'=>'fa fa-dashboard','url'=>['/course/courses/index']],
                    				['label'=>'Add course','icon'=>'fa fa-dashboard','url'=>['/course/courses/create']],
                    		]
                    		
                    ],
                		
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                		
//                     [
//                         'label' => 'Same tools',
//                         'icon' => 'fa fa-share',
//                         'url' => '#',
//                         'items' => [
//                             ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
//                             ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
//                             [
//                                 'label' => 'Level One',
//                                 'icon' => 'fa fa-circle-o',
//                                 'url' => '#',
//                                 'items' => [
//                                     ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                     [
//                                         'label' => 'Level Two',
//                                         'icon' => 'fa fa-circle-o',
//                                         'url' => '#',
//                                         'items' => [
//                                             ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                             ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                         ],
//                                     ],
//                                 ],
//                             ],
//                         ],
//                     ],
                ],
            ]
        ) ?>

    </section>

</aside>
