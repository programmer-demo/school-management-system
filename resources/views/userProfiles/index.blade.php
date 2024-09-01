@extends('layouts.main')
@section('content')
    <!-- MAIN PANEL -->
    <div id="main" role="main">

        <!-- RIBBON -->
        <div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li>Home</li><li>Dashboard</li>
            </ol>

        </div>
        <!-- END RIBBON -->

        <!-- MAIN CONTENT -->
        <div id="content">

            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Dashboard <span>> My Dashboard</span></h1>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                    <ul id="sparks" class="">
                        <li class="sparks-info">
                            <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                            <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                                1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                            </div>
                        </li>
                        <li class="sparks-info">
                            <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up"></i>&nbsp;45%</span></h5>
                            <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                                110,150,300,130,400,240,220,310,220,300, 270, 210
                            </div>
                        </li>
                        <li class="sparks-info">
                            <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                            <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                                110,150,300,130,400,240,220,310,220,300, 270, 210
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- widget grid -->
            <section id="widget-grid" class="">

                <!-- row -->
                <div class="row">
                    <article class="col-sm-12">
                        <!-- new widget -->
                        <div class="jarviswidget" id="wid-id-0" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                            <!-- widget options:
                            usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                            data-widget-colorbutton="false"
                            data-widget-editbutton="false"
                            data-widget-togglebutton="false"
                            data-widget-deletebutton="false"
                            data-widget-fullscreenbutton="false"
                            data-widget-custombutton="false"
                            data-widget-collapsed="true"
                            data-widget-sortable="false"

                            -->
                            <header>
                                <span class="widget-icon"> <i class="glyphicon glyphicon-stats txt-color-darken"></i> </span>
                                <h2>Live Feeds </h2>

                                <ul class="nav nav-tabs pull-right in" id="myTab">
                                    <li class="active">
                                        <a data-toggle="tab" href="index.html#s1"><i class="fa fa-clock-o"></i> <span class="hidden-mobile hidden-tablet">Live Stats</span></a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="index.html#s2"><i class="fa fa-facebook"></i> <span class="hidden-mobile hidden-tablet">Social Network</span></a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="index.html#s3"><i class="fa fa-dollar"></i> <span class="hidden-mobile hidden-tablet">Revenue</span></a>
                                    </li>
                                </ul>

                            </header>

                            <!-- widget div-->
                            <div class="no-padding">
                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox">

                                    test
                                </div>
                                <!-- end widget edit box -->

                                <div class="widget-body">
                                    <!-- content -->
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade active in padding-10 no-padding-bottom" id="s1">
                                            <div class="row no-space">
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
														<span class="demo-liveupdate-1"> <span class="onoffswitch-title">Live switch</span> <span class="onoffswitch">
																<input type="checkbox" name="start_interval" class="onoffswitch-checkbox" id="start_interval">
																<label class="onoffswitch-label" for="start_interval">
																	<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span>
																	<span class="onoffswitch-switch"></span> </label> </span> </span>
                                                    <div id="updating-chart" class="chart-large txt-color-blue"></div>

                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 show-stats">

                                                    <div class="row">
                                                        <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> My Tasks <span class="pull-right">130/200</span> </span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-color-blueDark" style="width: 65%;"></div>
                                                            </div> </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> Transfered <span class="pull-right">440 GB</span> </span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-color-blue" style="width: 34%;"></div>
                                                            </div> </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> Bugs Squashed<span class="pull-right">77%</span> </span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-color-blue" style="width: 77%;"></div>
                                                            </div> </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> User Testing <span class="pull-right">7 Days</span> </span>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-color-greenLight" style="width: 84%;"></div>
                                                            </div> </div>

                                                        <span class="show-stat-buttons"> <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="javascript:void(0);" class="btn btn-default btn-block hidden-xs">Generate PDF</a> </span> <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="javascript:void(0);" class="btn btn-default btn-block hidden-xs">Report a bug</a> </span> </span>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="show-stat-microcharts">
                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                                                    <div class="easy-pie-chart txt-color-orangeDark" data-percent="33" data-pie-size="50">
                                                        <span class="percent percent-sign">35</span>
                                                    </div>
                                                    <span class="easy-pie-title"> Server Load <i class="fa fa-caret-up icon-color-bad"></i> </span>
                                                    <ul class="smaller-stat hidden-sm pull-right">
                                                        <li>
                                                            <span class="label bg-color-greenLight"><i class="fa fa-caret-up"></i> 97%</span>
                                                        </li>
                                                        <li>
                                                            <span class="label bg-color-blueLight"><i class="fa fa-caret-down"></i> 44%</span>
                                                        </li>
                                                    </ul>
                                                    <div class="sparkline txt-color-greenLight hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
                                                        130, 187, 250, 257, 200, 210, 300, 270, 363, 247, 270, 363, 247
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                    <div class="easy-pie-chart txt-color-greenLight" data-percent="78.9" data-pie-size="50">
                                                        <span class="percent percent-sign">78.9 </span>
                                                    </div>
                                                    <span class="easy-pie-title"> Disk Space <i class="fa fa-caret-down icon-color-good"></i></span>
                                                    <ul class="smaller-stat hidden-sm pull-right">
                                                        <li>
                                                            <span class="label bg-color-blueDark"><i class="fa fa-caret-up"></i> 76%</span>
                                                        </li>
                                                        <li>
                                                            <span class="label bg-color-blue"><i class="fa fa-caret-down"></i> 3%</span>
                                                        </li>
                                                    </ul>
                                                    <div class="sparkline txt-color-blue hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
                                                        257, 200, 210, 300, 270, 363, 130, 187, 250, 247, 270, 363, 247
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                    <div class="easy-pie-chart txt-color-blue" data-percent="23" data-pie-size="50">
                                                        <span class="percent percent-sign">23 </span>
                                                    </div>
                                                    <span class="easy-pie-title"> Transfered <i class="fa fa-caret-up icon-color-good"></i></span>
                                                    <ul class="smaller-stat hidden-sm pull-right">
                                                        <li>
                                                            <span class="label bg-color-darken">10GB</span>
                                                        </li>
                                                        <li>
                                                            <span class="label bg-color-blueDark"><i class="fa fa-caret-up"></i> 10%</span>
                                                        </li>
                                                    </ul>
                                                    <div class="sparkline txt-color-darken hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
                                                        200, 210, 363, 247, 300, 270, 130, 187, 250, 257, 363, 247, 270
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                    <div class="easy-pie-chart txt-color-darken" data-percent="36" data-pie-size="50">
                                                        <span class="percent degree-sign">36 <i class="fa fa-caret-up"></i></span>
                                                    </div>
                                                    <span class="easy-pie-title"> Temperature <i class="fa fa-caret-down icon-color-good"></i></span>
                                                    <ul class="smaller-stat hidden-sm pull-right">
                                                        <li>
                                                            <span class="label bg-color-red"><i class="fa fa-caret-up"></i> 124</span>
                                                        </li>
                                                        <li>
                                                            <span class="label bg-color-blue"><i class="fa fa-caret-down"></i> 40 F</span>
                                                        </li>
                                                    </ul>
                                                    <div class="sparkline txt-color-red hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
                                                        2700, 3631, 2471, 2700, 3631, 2471, 1300, 1877, 2500, 2577, 2000, 2100, 3000
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end s1 tab pane -->

                                        <div class="tab-pane fade" id="s2">
                                            <div class="widget-body-toolbar bg-color-white">

                                                <form class="form-inline" role="form">

                                                    <div class="form-group">
                                                        <label class="sr-only" for="s123">Show From</label>
                                                        <input type="email" class="form-control input-sm" id="s123" placeholder="Show From">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control input-sm" id="s124" placeholder="To">
                                                    </div>

                                                    <div class="btn-group hidden-phone pull-right">
                                                        <a class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown"><i class="fa fa-cog"></i> More <span class="caret"> </span> </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="fa fa-file-text-alt"></i> Export to PDF</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="fa fa-question-sign"></i> Help</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </form>

                                            </div>
                                            <div class="padding-10">
                                                <div id="statsChart" class="chart-large has-legend-unique"></div>
                                            </div>

                                        </div>
                                        <!-- end s2 tab pane -->

                                        <div class="tab-pane fade" id="s3">

                                            <div class="widget-body-toolbar bg-color-white smart-form" id="rev-toggles">

                                                <div class="inline-group">

                                                    <label for="gra-0" class="checkbox">
                                                        <input type="checkbox" name="gra-0" id="gra-0" checked="checked">
                                                        <i></i> Target </label>
                                                    <label for="gra-1" class="checkbox">
                                                        <input type="checkbox" name="gra-1" id="gra-1" checked="checked">
                                                        <i></i> Actual </label>
                                                    <label for="gra-2" class="checkbox">
                                                        <input type="checkbox" name="gra-2" id="gra-2" checked="checked">
                                                        <i></i> Signups </label>
                                                </div>

                                                <div class="btn-group hidden-phone pull-right">
                                                    <a class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown"><i class="fa fa-cog"></i> More <span class="caret"> </span> </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:void(0);"><i class="fa fa-file-text-alt"></i> Export to PDF</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><i class="fa fa-question-sign"></i> Help</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>

                                            <div class="padding-10">
                                                <div id="flotcontainer" class="chart-large has-legend-unique"></div>
                                            </div>
                                        </div>
                                        <!-- end s3 tab pane -->
                                    </div>

                                    <!-- end content -->
                                </div>

                            </div>
                            <!-- end widget div -->
                        </div>
                        <!-- end widget -->

                    </article>
                </div>

                <!-- end row -->

            </section>
            <!-- end widget grid -->

        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
@endsection



<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
---- Include the above in your HEAD tag --------
<!--  -->
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
---- Include the above in your HEAD tag --------
<!--  -->
<!--  -->
<!-- <head> -->
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- </head> -->
<!--  -->
<!--  -->
<!-- <html> -->
<!-- <body> -->
<!-- <hr> -->
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-2"><h1></h1></div>
            <div class="col-sm-9"><h1>User name</h1></div>
            <div class="col-sm-1"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
        </div>
        <div class="row">
        <div class="col-sm-1"></div>
            <div class="col-sm-4"><!--left col-->
                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div>
                </hr><br>

                <div class="panel panel-default">
                    <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                    <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
                

                <div class="panel panel-default">
                    <div class="panel-heading">Social Media</div>
                    <div class="panel-body"><i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i></div>
                </div>
                </ul>
            </div><!--/col-3-->

            <div class="col-sm-7">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                    <li><a data-toggle="tab" href="#messages">Menu 1</a></li>
                    <li><a data-toggle="tab" href="#settings">Menu 2</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h4>Mobile</h4></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email"><h4>Location</h4></label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>

            <hr>

                </div><!--/tab-pane-->
                <div class="tab-pane" id="messages">

                    <h2></h2>

                    <hr>
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile"><h4>Mobile</h4></label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Location</h4></label>
                                <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password2"><h4>Verify</h4></label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                        </div>
                    </form>

                </div><!--/tab-pane-->
                <div class="tab-pane" id="settings">


                    <hr>
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile"><h4>Mobile</h4></label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Location</h4></label>
                                <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password2"><h4>Verify</h4></label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                        </div>
                    </form>
                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div>/row
<!--  -->
<!-- <script> -->
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function(){
            readURL(this);
        });
    });
<!-- </script> -->
<!--  -->
<!-- </body> -->
<!-- </html> -->
<!--  -->
<!--  -->