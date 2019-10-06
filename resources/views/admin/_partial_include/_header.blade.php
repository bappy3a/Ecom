<header class="bst-header">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <a class="navbar-brand" href="index.html">
            <img class="img-fluid display-ib" src="/admin/assets/img/logo.png" alt="logo" width="130" height="16">
        </a>
        <div class="bst-mobile-toggle-btn text-right float-right">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </li>
                <li class="list-inline-item">
                    <button class="c-hamburger bst-bars"> <span>toggle menu</span></button>
                </li>
            </ul>
        </div>
        <div id="nav-content" class="collapse navbar-collapse justify-content-between">
            <ul class="bst-mega-menu-wrapper navbar-nav hidden-md-down">
                <li class="nav-item dropdown hidden-lg-down">
                    <a href="javascript:;" id="mega-menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Mega Menu
                    </a>
                    <div class="dropdown-menu bst-mega-menu bst-shadow" aria-labelledby="mega-menu">
                        <div class="bst-mega-menu-wrap pad-all-lg">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3 col-lg-2">
                                    <h4 class="sidenav-heading text-uppercase mrgn-b-md">Dashboards</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="index.html" class="btn-default mrgn-b-xs pad-l-sm">Dashboard 1</a></li>
                                        <li><a href="dashboard-v2.html" class="btn-default mrgn-b-xs pad-l-sm">Dashboard 2</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-2">
                                    <h4 class="sidenav-heading text-uppercase mrgn-b-md">Features</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="ui-buttons.html">UI Elements</a></li>
                                        <li><a href="notification.html">Components</a></li>
                                        <li><a href="google-chart.html">Graph and Charts</a></li>
                                        <li><a href="googlemap.html">Maps</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-2">
                                    <h4 class="sidenav-heading text-uppercase mrgn-b-md">Layouts</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="index.html">Sidebar At left</a></li>
                                        <li><a href="right-sidebar.html">Sidebar At right</a></li>
                                        <li><a href="fixed-header.html">Fixed Header</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-2">
                                    <h4 class="sidenav-heading text-uppercase mrgn-b-md">Pages</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="users-list.html">Users</a></li>
                                        <li><a href="ecommerce-product.html">Ecommerce</a></li>
                                        <li><a href="email.html">Mailbox</a></li>
                                        <li><a href="login.html">Extra Pages</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                    <div class="bst-sparkline">
                                        <div class="bst-card-box bst-sparkline-list d-flex bg-success clearfix">
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6"> <span class="show count-item" data-count="5000">0</span> <span>New visitors</span> </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="chart sparkline text-center" data-chart="sparkline" data-type="bar" data-height="50px" data-barwidth="6" data-width="100%" data-barspacing="2" data-barcolor="#ffffff" data-values="[9, 8, 9, 7, 6, 8, 7, 8]"> </div>
                                            </div>
                                        </div>
                                        <div class="bst-card-box bst-sparkline-list d-flex clearfix bg-info">
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6"> <span class="show count-item" data-count="3000">0</span> <span>New Users</span> </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="chart sparkline text-center" data-chart="sparkline" data-type="bar" data-height="50px" data-barwidth="6" data-width="100%" data-barspacing="2" data-barcolor="#ffffff" data-values="[5, 6, 8, 9, 5, 8, 4, 6]"> </div>
                                            </div>
                                        </div>
                                        <div class="bst-card-box bst-sparkline-list d-flex clearfix bg-warning">
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6"> <span class="show count-item" data-count="7000">0</span> <span>Active Users</span> </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="chart sparkline text-center" data-chart="sparkline" data-type="bar" data-height="50px" data-barwidth="6" data-width="100%" data-barspacing="2" data-barcolor="#ffffff" data-values="[9, 8, 9, 7, 6, 8, 7, 8]"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            @if(Session::has('msg'))
                <h5 id="msg" style="color: #ffffff">{{session::get('msg')}}</h5>
            @endif
            <script>
                setTimeout(function() {
                    $('#msg').fadeOut('fast');
                }, 4000);
            </script>
            <ul class="navbar-nav bst-user-notifications">
                <li class="dropdown dropdown-right">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="user-dropdown">John Doe</span>
                        <img class="img-fluid display-ib mrgn-l-sm rounded-circle" src="{{asset('admin/')}}assets/img/user-1.jpg" width="64" height="64" alt="User-image">
                    </a>
                    <ul class="dropdown-menu bst-shadow">
                        <li class="dropdown-item"><a href="user-profile.html"><i class="fa fa-user"></i> My Profile</a></li>
                        <li class="dropdown-item"><a href="users-list.html"><i class="fa fa-money"></i> My Contact</a></li>
                        <li class="dropdown-item"><a href="email.html" class="pos-relative">
                                <i class="fa fa-inbox"></i> My Inbox <span class="badge badge-danger pull-right profile-badge">2</span></a>
                        </li>
                        <li class="dropdown-item">
                            <a href="user-profile.html" class="pos-relative"><i class="fa fa-tasks"></i> My task <span class="badge badge-success pull-right profile-badge">5</span></a></li>
                        <li class="dropdown-item"><a href="user-settings.html">
                                <i class="fa fa-cog"></i> Account Setting</a>
                        </li>
                        <li role="separator" class="dropdown-divider"></li>
                        <li class="dropdown-item"><a href="login.html"><i class="fa fa-power-off"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
