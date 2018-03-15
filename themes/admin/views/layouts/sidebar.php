<aside class="aside">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav class="sidebar" data-sidebar-anyclick-close="">
            <!-- START sidebar nav-->
            <ul class="nav">
                <!-- START user info-->
                <li class="has-user-block">
                    <div class="collapse" id="user-block">
                        <div class="item user-block">
                            <!-- User picture-->
                            <div class="user-block-picture">
                                <div class="user-block-status">
                                    <img class="img-thumbnail img-circle" src="img/user/02.jpg" alt="Avatar" width="60" height="60">
                                    <div class="circle circle-success circle-lg"></div>
                                </div>
                            </div>
                            <!-- Name and Job-->
                            <div class="user-block-info">
                                <span class="user-block-name">Hello, <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?></span>
                                <span class="user-block-role"><?php echo $_SESSION['role']; ?></span>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END user info-->
                <!-- Iterates over all sidebar items-->
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.HEADER">Main Navigation</span>
                </li>
                <li class=" ">
                    <a href="<?php echo Yii::app()->createUrl("admin/dashboard"); ?>" title="Dashboard">
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.DASHBOARD">Dashboard</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="<?php echo Yii::app()->createUrl("admin/users"); ?>" title="Users">
                        <em class="icon-chemistry"></em>
                        <span data-localize="sidebar.nav.element.ELEMENTS">Users</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="<?php echo Yii::app()->createUrl("admin/companies"); ?>" title="Companies">
                        <em class="icon-chemistry"></em>
                        <span data-localize="sidebar.nav.element.ELEMENTS">Companies</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#" title="Inspectors">
                        <em class="icon-graduation"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">Inspectors</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" title="Data Entry">
                        <em class="icon-graduation"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">Data Entry</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo Yii::app()->createUrl("admin/admins"); ?>" title="Admins">
                        <em class="icon-graduation"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">Admins</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo Yii::app()->createUrl("admin/aR"); ?>" title="Account Representatives">
                        <em class="icon-graduation"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">AR</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo Yii::app()->createUrl("admin/rC"); ?>" title="Rabbinical Coordinator">
                        <em class="icon-graduation"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">RC</span>
                    </a>
                </li>
            </ul>
            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>