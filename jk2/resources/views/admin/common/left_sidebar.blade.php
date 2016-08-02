<!-- Left SideBar -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="{{ asset('/public/admin/img/find_user.png') }}" class="user-image img-responsive"/>
                        </li>
                        <li>
                            <a class="active-menu"  href="{{ route('admin.dashboard') }}">
                                <i class="fa fa-dashboard fa-3x"></i> Dashboard
                            </a>
                        </li>
                         <li>
                            <a href="{{ route('admin.members') }}">
                                <i class="fa fa-desktop fa-3x"></i>Members
                            </a>
                        </li>
                        <li>
                            <a  href="{{ route('admin.events') }}">
                                <i class="fa fa-qrcode fa-3x"></i>Events
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.gallery') }}">
                                <i class="fa fa-bar-chart-o fa-3x"></i>Gallery
                            </a>
                        </li>   
                        <li>
                            <a href="{{ route('admin.blogs') }}">
                                <i class="fa fa-table fa-3x"></i>Blogs
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.news') }}">
                                <i class="fa fa-table fa-3x"></i>News
                            </a>
                        </li> 
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-sitemap fa-3x"></i>CMS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.about-us') }}">About US</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Events Images</a>
                                </li>
                                <li>
                                    <a href="#">mission and vision</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>  
            <!-- End Left Sidebar  -->