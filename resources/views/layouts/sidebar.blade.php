<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="assets/img/avatars/sunny.png" alt="me" class="online" />
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
            <li class="active open">
                <a href="index.html#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
                <ul style="display: block;">
                    <li class="active">
                        <a href="index.html" title="Dashboard"><span class="menu-item-parent">Analytics Dashboard</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.html#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span></a>
                <ul>
                    <li>
                        <a href="flot.html">Flot Chart</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.html#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
                <ul>
                    <li>
                        <a href="table.html">Normal Tables</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.html#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span></a>
                <ul>
                    <li>
                        <a href="form-elements.html">Smart Form Elements</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.html#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span></a>
                <ul>
                    <li>
                        <a href="general-elements.html">General Elements</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.html#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">E-Commerce</span></a>
                <ul>
                    <li><a href="orders.html">Orders</a></li>
                </ul>
            </li>
        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

</aside>
<!-- END NAVIGATION -->
