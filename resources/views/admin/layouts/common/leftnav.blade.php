<!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">
					  @yield('content')
                </div>
                <!-- // END drawer-layout__content -->

                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content">
                        <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
                            <div class="sidebar-heading">Menu</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Dashboards</span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="dashboards_menu">
                                        <li class="sidebar-menu-item active">
                                            
                                        </li>
                                        
                                        
                                        
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                        <span class="sidebar-menu-text">Catalog</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="apps_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-activities.html">
                                                <span class="sidebar-menu-text">Categories</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-trello.html">
                                                <span class="sidebar-menu-text">Products</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-projects.html">
                                                <span class="sidebar-menu-text">Subscribe Plans</span>
                                            </a>
                                        </li>
                                       
                                        
                                        
                                        
                                    </ul>
                                </li>
								

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                        <span class="sidebar-menu-text">Sales</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="pages_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="companies.html">
                                                <span class="sidebar-menu-text">Orders</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="stories.html">
                                                <span class="sidebar-menu-text">Customers  </span>
                                            </a>
                                        </li>
                                        
                                        
                                        
                                    </ul>
                                </li>
								 <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                        <span class="sidebar-menu-text">Users</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="layouts_menu">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="index.html">
                                                <span class="sidebar-menu-text">Admin Roles</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fluid-dashboard.html">
                                                <span class="sidebar-menu-text">Admin Users</span>
                                            </a>
                                        </li>
                                        
                                       
                                    </ul>
                                </li>
								<li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"  href="{{ route('admin.page') }}">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Pages</span>
                                       
                                    </a>
                                    
                                </li>
								<li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Banners</span>
                                       
                                    </a>
                                    
                                </li>
								
								
								
								
								
								
								
								
								
								
								
								
								

                               
                            </ul>
                            
                     

                            

                            

                        </div>
                    </div>
                </div>
           
		   </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->