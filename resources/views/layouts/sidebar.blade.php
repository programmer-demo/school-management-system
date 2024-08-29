<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="" alt="me" class="online" />
						<span>
							john.doe
						</span>
						<i class="fa fa-angle-down"></i>
					</a>

				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li class="">
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
                <ul>
                    <li class="">
                        <a href="{{route('index')}}" title="Dashboard"><span class="menu-item-parent">Analytics Dashboard</span></a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" title=""><i class="fa fa-lg fa-fw fa-female"></i><span class="menu-item-parent">Students</span> </a>
                <ul>
                    <li>
                        <a href="{{route('students')}}">Students</a>
                    </li>
                </ul>
            </li>
{{--            <li>--}}
{{--                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Report</span></a>--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="#">Sale Report</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">Set Up</span></a>
                <ul>
                    <li>
                        <a href="#">Settings</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">User Profile</span></a>
                <ul>
                    <li>
                        <a href="{{route('user.index')}}">User</a>
                    </li>
                    <li>
                        <a href="#">User Profile</a>
                    </li>
                </ul>
            </li>
{{--            <li>--}}
{{--                <a href="index.html#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="table.html">Normal Tables</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="index.html#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span></a>--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="form-elements.html">Smart Form Elements</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="index.html#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span></a>--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="general-elements.html">General Elements</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="index.html#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">E-Commerce</span></a>--}}
{{--                <ul>--}}
{{--                    <li><a href="orders.html">Orders</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">Payment</span></a>
                <ul>
                    <li>
                        <a href="#">Payment</a>
                    </li>
                    <li>
                        <a href="#">Payment Detail</a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

</aside>
<!-- END NAVIGATION -->
