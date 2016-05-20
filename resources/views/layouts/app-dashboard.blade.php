<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akela - helps you lead your business</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('/dashboard')}}"><img src="{{asset('assets/images/logo_light.png')}}" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <p class="navbar-text"><span class="label bg-success">Online</span></p>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown language-switch">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('assets/images/flags/gb.png')}}" class="position-left" alt="">
                    English
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li><a class="english"><img src="{{asset('assets/images/flags/gb.png')}}" alt=""> English</a></li>
                    <li><a class="espana"><img src="{{asset('assets/images/flags/es.png')}}" alt=""> Español</a></li>
                    <li><a class="deutsch"><img src="{{asset('assets/images/flags/de.png')}}" alt=""> Deutsch</a></li>
                </ul>
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('assets/images/placeholder.jpg')}}" alt="">
                    <span>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{'/profile/'.Auth::user()->id}}"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Sydney, NSW
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-cog3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                            <li class="active"><a href="{{'/dashboard'}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                            <li>
                                <a href="#"><i class="fa fa-user-plus"></i> <span>Clients</span></a>
                                <ul>
                                    <li><a href="{{'/student'}}">Show Students</a></li>
                                    <li><a href="{{'/student/add'}}">Add New Student</a></li>
                                    <li><a href="{{'/student/search'}}">Search Student</a></li>
                                    <li><a href="#">Update Student</a></li>
                                    <li class="navigation-divider"></li>
                                    <li><a href="boxed_default.html">Quotations</a></li>
                                    <li><a href="{{'/student/documents'}}">Documents</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bullhorn"></i> <span>Expiring Visas</span></a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i> <span>Search and Email</span></a></li>
                                </ul>
                            </li>
                            <!-- /main -->

                            <!-- Forms -->
                            <li class="navigation-header"><span>Courses and Diplomas</span> <i class="icon-menu" title="Forms"></i></li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-search"></i> <span>Search By User</span></a>
                                <ul>
                                    <li><a href="wizard_steps.html"><i class="icon-pencil3"></i> <span>Add English Course</span></a></li>
                                    <li><a href="#"><i class="fa fa-mortar-board"></i> <span>Add Diploma</span></a></li>
                                </ul>
                            </li>
                            <!-- /forms -->

                            <!-- Appearance -->
                            <li class="navigation-header"><span>Administration</span> <i class="icon-menu" title="Administration"></i></li>
                            <li>
                                <a href="#"><i class="icon-grid"></i> <span>Client Payment Receipts</span></a>
                                <ul>
                                    <li><a href="components_modals.html">Search</a></li>
                                    <li><a href="components_dropdowns.html">Re-issue</a></li>
                                    <li><a href="components_tabs.html">Create</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-cash3"></i> <span>Invoicing</span></a>
                                <ul>
                                    <li><a href="{{'/invoices'}}">Invoice dashboard</a></li>
                                    <li><a href="components_modals.html">Search invoice</a></li>
                                    <li><a href="components_dropdowns.html">Re-issue invoice</a></li>
                                    <li><a href="components_tabs.html">Create new invoice</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-gift"></i> <span>Extra components</span></a>
                                <ul>
                                    <li>
                                        <a href="#"><i class="icon-people"></i> <span>Manage Counsellors</span></a>
                                        <ul>
                                            <li><a href="{{'/register-counsellor'}}">Create</a></li>
                                            <li><a href="extra_sliders_noui.html">Update</a></li>
                                            <li><a href="extra_sliders_noui.html">Remove</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="extra_sliders_ion.html">Education Providers</a>
                                        <ul>
                                            <li><a href="extra_sliders_noui.html">Add College/School</a></li>
                                            <li><a href="extra_sliders_noui.html">Update</a></li>
                                            <li><a href="extra_sliders_noui.html">Remove</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="extra_sliders_noui.html">Download Clients DB to Excel</a></li>
                                    <li><a href="extra_sliders_noui.html">Upload Clients lists .csv File</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- /page container -->
            <div class="container">
                @section('page-header')
                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Renovations</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="{{'/dashboard'}}"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ul>

                        <ul class="breadcrumb-elements">
                            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear position-left"></i>
                                    Settings
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                @show
                @yield('content')
                <!-- Footer -->
                {{--<div class="footer text-muted">--}}
                    {{--&copy; 2016. <a href="#">MinotaurCRM</a> by <a href="http://www.sevenstudio.com.au" target="_blank">Seven Studio</a>--}}
                {{--</div>--}}
                <!-- /footer -->
            </div>
        </div>
    </div>
</div>

<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/ui/moment/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/pickers/daterangepicker.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pages/dashboard.js')}}"></script>
<!-- /theme JS files -->
</body>
</html>