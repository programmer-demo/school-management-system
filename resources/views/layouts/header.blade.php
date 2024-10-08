<!-- HEADER -->
<header id="header">
    <div id="logo-group" style="width:60rem !important; margin-bottom:0px; display:flex; align-item:center;  gap:1rem;">

        <!-- PLACE YOUR LOGO HERE -->
        {{-- <span id="logo" style="margin:auto;padding:0;display:flex;justify-content:center;align-item:center"> <img src="{{ asset('logo/logo.jpg') }}" alt="" style="width: 50px;border-radius:10%"> <span style="margin-left: 10px !important;font-size:12px !important">School Management System</span></span> --}}

        {{-- <span id="" style=" "> <img src="{{ asset('logo/logo(SMS)1.jpg') }}" alt="" style="width: 50px;border-radius:10%"> </span> --}}
        <div class="" style="width: 50%;margin:auto;margin-left:8px;margin-right:0">
            <span id="" style=" "> <img src="{{ asset('logo/logo(SMS).jpg') }}" alt="" style="width: 10%;border-radius:10%;padding:0px;margin:auto"> </span>
            <span style=" text-align:center; font-size:18px; font-weight:bold;margin-left:8px">School Management System</span>
        </div>
        {{-- <span id="logo" style="margin:auto;padding:0;display:flex;justify-content:center;align-item:center"> <img src="{{ asset('logo/logo(SMS).jpg') }}" alt="" style="width: 50px;border-radius:10%"> <span style="margin-left: 10px !important;font-size:12px !important">School Management System</span></span> --}}

        {{-- <span id="logo" style="margin:auto;padding:0;display:flex;justify-content:center;align-item:center"> <img src="https://p7.hiclipart.com/preview/1008/987/663/school-information-management-system-education-student-management.jpg" alt="" style="width: 50px;border-radius:10%"> <span style="margin-left: 10px !important;font-size:12px !important">School Management System</span></span> --}}

        <!-- END LOGO PLACEHOLDER -->
        <!-- Note: The activity badge color changes when clicked and resets the number to 0
        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
        <span id="activity" class="activity-dropdown" style="margin-left: 20px;"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
        <div class="ajax-dropdown">

            <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
            <div class="btn-group btn-group-justified" data-toggle="buttons" id="myTab" style="display: flex;justify-content: space-between;align-items: center">
{{--                <ul id="myTab" class="nav nav-tabs" style="min-height: 10px !important;">--}}
{{--                    <li class="active"><a href="#home" data-toggle="tab">Msgs (14)</a></li>--}}
{{--                    <li class=""><a href="#profile" data-toggle="tab">Notify (3)</a></li>--}}
{{--                </ul>--}}
                <div style="width: 46% !important;">
                    <a href="#home" data-toggle="tab" onclick="Msgs()">
                        <label class="btn btn-default active" id="msgs" style="width: 90%">
                            Msgs (14)
                        </label>
                    </a>
                </div>
                <div style="width: 48% !important;">
                    <a href="#profile" data-toggle="tab" onclick="Notify()">
                        <label class="btn btn-default" id="notify" style="width: 80%">
                            notify (3)
                        </label>
                    </a>
                </div>
                <script>
                    $("#msgs").click(function(){
                        $("#msgs").addClass("active");
                        $("#notify").removeClass("active");
                    });
                    $("#notify").click(function(){
                        $("#notify").addClass("active");
                        $("#msgs").removeClass("active");
                    });
                </script>
                {{--                <label class="btn btn-default">--}}
{{--                    <input type="radio" name="activity" id="ajax/notify/tasks.html">--}}
{{--                    Tasks (4) </label>--}}
            </div>

            <!-- notification content -->
            <div class="ajax-notifications custom-scroll">

{{--                <div class="alert alert-transparent">--}}
{{--                    <h4>Click a button to show messages here</h4>--}}
{{--                    This blank page message helps protect your privacy, or you can show the first message here automatically.--}}
{{--                </div>--}}

{{--                <i class="fa fa-lock fa-4x fa-border"></i>--}}

                <div id="myTabContent" class="tab-content" style="width: 90%;margin: auto;">
                    <div class="tab-pane active in" id="home">
                        <div class="row" style="width: 100%">

                            <div class="col-md-12 col-lg-12 col-xl-12">

                                <h5 class="font-weight-bold mb-3 text-center text-lg-start" id="member" style="font-weight: bold">Member</h5>

                                <div class="card" id="html">
{{--                                    <div class="card-body">--}}

{{--                                        <div class="list-unstyled mb-0">--}}
{{--                                            <div class="p-2 border-bottom bg-body-tertiary">--}}
{{--                                                <a href="#home" data-toggle="tab" class="" style="display: flex;justify-content: space-between;align-items: center;">--}}
{{--                                                    <div class="d-flex flex-row" style="display: flex;justify-content: space-between;align-items: center">--}}
{{--                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar"--}}
{{--                                                             class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60" style="border-radius: 50%">--}}
{{--                                                        <div class="pt-1" style="padding-left: 10px">--}}
{{--                                                            <p class="fw-bold mb-0">John Doe</p>--}}
{{--                                                            <p class="small text-muted">Hello, Are you there?</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="pt-1">--}}
{{--                                                        <p class="small text-muted mb-1">Just now</p>--}}
{{--                                                        <span class="badge bg-danger float-end" style="background-color: red">1</span>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        profile tab!
                    </div>
                </div>
            </div>
            <!-- end notification content -->

            <!-- footer: refresh area -->
            <span> Last updated on: 12/12/2013 9:43AM
						<button type="button" onclick="work('work')" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
							<i class="fa fa-refresh"></i>
						</button>
					</span>
            <!-- end footer -->

        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>
    <!-- end projects dropdown -->

    <!-- pulled right: nav area -->
    <div class="pull-right" >

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- #MOBILE -->
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="index.html#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                    <img src="assets/img/avatars/sunny.png" alt="John Doe" class="online" />
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right" style="margin-top:12px !important">
            <span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" title="Sign Out" onclick="return confirm('Sure ? You Want to Sign out')" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></button>
                </form>
                {{--  <a href="{{ route('logout') }}" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a>   --}}
            </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- input: search field -->
        <form action="search.html" class="header-search pull-right">
            <input id="search-fld"  type="text" name="param" placeholder="Find reports and more" data-autocomplete='[
					"ActionScript",
					"AppleScript",
					"Asp",
					"BASIC",
					"C",
					"C++",
					"Clojure",
					"COBOL",
					"ColdFusion",
					"Erlang",
					"Fortran",
					"Groovy",
					"Haskell",
					"Java",
					"JavaScript",
					"Lisp",
					"Perl",
					"PHP",
					"Python",
					"Ruby",
					"Scala",
					"Scheme"]'>
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
            <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
        </form>
        <!-- end input: search field -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->

        <!-- #Voice Command: Start Speech -->
        <div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
            <div>
                <a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a>
                <div class="popover bottom"><div class="arrow"></div>
                    <div class="popover-content">
                        <h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
                        <h4 class="vc-title-error text-center">
                            <i class="fa fa-microphone-slash"></i> Voice command failed
                            <br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
                            <br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
                        </h4>
                        <a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a>
                        <a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Close Popup</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end voice command -->

        <!-- multiple lang dropdown : find all flags in the flags page -->
        <ul class="header-dropdown-list hidden-xs">
            <li>
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"> <img src="assets/img/blank.gif" class="flag flag-us" alt="United States"> <span> English (US) </span> <i class="fa fa-angle-down"></i> </a>
                <ul class="dropdown-menu pull-right">
                    <li class="active">
                        <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-fr" alt="France"> Français</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-jp" alt="Japan"> 日本語</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-cn" alt="China"> 中文</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-it" alt="Italy"> Italiano</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-kr" alt="Korea"> 한국어</a>
                    </li>

                </ul>
            </li>
        </ul>
        <!-- end multiple lang -->

    </div>
    <!-- end pulled right: nav area -->
</header>
<!-- END HEADER -->
