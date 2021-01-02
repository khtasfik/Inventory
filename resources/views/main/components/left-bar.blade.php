            <!--APP-SIDEBAR-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar">
                <div class="side-header">
                    <a class="header-brand1" href="index.html">
                        <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{ asset('assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo" alt="logo">
                        <img src="{{ asset('assets/images/brand/logo-2.png') }}" class="header-brand-img light-logo" alt="logo">
                        <img src="{{ asset('assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1" alt="logo">
                    </a><!-- LOGO -->
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a>
                    <!-- sidebar-toggle-->
                </div>
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body text-center">
                        <div class="user-pic">
                            <img src="{{ asset('assets/images/users/10.jpg') }}" alt="user-img" class="avatar-xl rounded-circle">
                        </div>
                        <div class="user-info">
                            <h6 class=" mb-0 text-dark">Elizabeth Dyer</h6>
                            <span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-navs">
                    <ul class="nav  nav-pills-circle">
                        <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">
                            <a class="nav-link text-center m-2">
                                <i class="fe fe-settings"></i>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Chat">
                            <a class="nav-link text-center m-2">
                                <i class="fe fe-mail"></i>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Followers">
                            <a class="nav-link text-center m-2">
                                <i class="fe fe-user"></i>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                            <a class="nav-link text-center m-2">
                                <i class="fe fe-power"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="side-menu">
                    <li>
                        <h3>Main</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span><i
                                class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="{{route('dashboard')}}"><span>Dashboard</span></a></li>
                            <li><a class="slide-item" href="{{route('service')}}"><span>Service</span></a></li>
                            <li><a class="slide-item" href="index2.html"><span>Service Dashboard</span></a></li>
                            <li><a class="slide-item" href="index4.html"><span>Finance Dashboard</span></a></li>
                            <li><a class="slide-item" href="index5.html"><span>IT Dashboard</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <h3>Users</h3>
                    </li>
                    <li>
                        <a class="side-menu__item" href="{{ route('users.index') }}"><i class="side-menu__icon ti-package"></i><span
                                class="side-menu__label">User Lists</span></a>
                    </li>
                    <li>
                        <h3>Suppliers</h3>
                    </li>
                    <li>
                        <a class="side-menu__item" href="{{ route('supplier.index') }}"><i class="side-menu__icon ti-package"></i><span
                                class="side-menu__label">Suppliers</span></a>
                    </li>
                    <li>
                        <h3>Elements</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-panel"></i><span class="side-menu__label">Components</span><i
                                class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="cards.html" class="slide-item"> Cards design</a></li>
                            <li><a href="calendar.html" class="slide-item"> Default calendar</a></li>
                            <li><a href="calendar2.html" class="slide-item"> Full calendar</a></li>
                            <li><a href="chat.html" class="slide-item"> Default Chat</a></li>
                            <li><a href="notify.html" class="slide-item"> Notifications</a></li>
                            <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
                            <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
                            <li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
                            <li><a href="loaders.html" class="slide-item"> Loaders</a></li>
                            <li><a href="counters.html" class="slide-item"> Counters</a></li>
                            <li><a href="rating.html" class="slide-item"> Rating</a></li>
                            <li><a href="timeline.html" class="slide-item"> Timeline</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-layers"></i><span class="side-menu__label">Elements</span><i
                                class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="alerts.html" class="slide-item"> Alerts</a></li>
                            <li><a href="buttons.html" class="slide-item"> Buttons</a></li>
                            <li><a href="colors.html" class="slide-item"> Colors</a></li>
                            <li><a href="avatarsquare.html" class="slide-item"> Avatar-Square</a></li>
                            <li><a href="avatar-round.html" class="slide-item"> Avatar-Rounded</a></li>
                            <li><a href="avatar-radius.html" class="slide-item"> Avatar-Radius</a></li>
                            <li><a href="dropdown.html" class="slide-item"> Drop downs</a></li>
                            <li><a href="list.html" class="slide-item"> List</a></li>
                            <li><a href="tags.html" class="slide-item"> Tags</a></li>
                            <li><a href="pagination.html" class="slide-item"> Pagination</a></li>
                            <li><a href="navigation.html" class="slide-item"> Navigation</a></li>
                            <li><a href="typography.html" class="slide-item"> Typography</a></li>
                            <li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a></li>
                            <li><a href="badge.html" class="slide-item"> Badges</a></li>
                            <li><a href="jumbotron.html" class="slide-item"> Jumbotron</a></li>
                            <li><a href="panels.html" class="slide-item"> Panels</a></li>
                            <li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-rocket"></i><span class="side-menu__label">Advanced
                                Elements</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="mediaobject.html" class="slide-item"> Media Object</a></li>
                            <li><a href="accordion.html" class="slide-item"> Accordions</a></li>
                            <li><a href="tabs.html" class="slide-item"> Tabs</a></li>
                            <li><a href="chart.html" class="slide-item"> Charts</a></li>
                            <li><a href="modal.html" class="slide-item"> Modal</a></li>
                            <li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and popover</a></li>
                            <li><a href="progress.html" class="slide-item"> Progress</a></li>
                            <li><a href="carousel.html" class="slide-item"> Carousels</a></li>
                            <li><a href="headers.html" class="slide-item"> Headers</a></li>
                            <li><a href="footers.html" class="slide-item"> Footers</a></li>
                            <li><a href="users-list.html" class="slide-item"> User List</a></li>
                            <li><a href="search.html" class="slide-item">Search</a></li>
                            <li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3>Charts & Tables</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-bar-chart"></i><span class="side-menu__label">Charts</span><i
                                class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
                            <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
                            <li><a href="chart-echart.html" class="slide-item"> ECharts</a></li>
                            <li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
                            <li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
                            <li><a href="charts.html" class="slide-item"> C3 Bar Charts</a></li>
                            <li><a href="chart-line.html" class="slide-item"> C3 Line Charts</a></li>
                            <li><a href="chart-donut.html" class="slide-item"> C3 Donut Charts</a></li>
                            <li><a href="chart-pie.html" class="slide-item"> C3 Pie charts</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-clipboard"></i><span class="side-menu__label">Tables</span><i
                                class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="tables.html" class="slide-item">Default table</a></li>
                            <li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3>Forms & Icons</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-receipt"></i><span class="side-menu__label">Forms</span><i
                                class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
                            <li><a href="form.html" class="slide-item"> Form Editor</a></li>
                            <li><a href="form-wizard.html" class="slide-item"> Form Wizard</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-shield"></i><span class="side-menu__label">Icons</span><i
                                class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                            <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
                            <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
                            <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
                            <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
                            <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
                            <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
                            <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
                            <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
                            <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3>Pages</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-files"></i><span class="side-menu__label">Pages</span><i
                                class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="profile.html" class="slide-item"> Profile</a></li>
                            <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
                            <li><a href="email.html" class="slide-item"> Mail-Inbox</a></li>
                            <li><a href="emailservices.html" class="slide-item"> Mail-Compose</a></li>
                            <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                            <li><a href="about.html" class="slide-item"> About Company</a></li>
                            <li><a href="services.html" class="slide-item"> Services</a></li>
                            <li><a href="faq.html" class="slide-item"> FAQS</a></li>
                            <li><a href="terms.html" class="slide-item"> Terms</a></li>
                            <li><a href="invoice.html" class="slide-item"> Invoice</a></li>
                            <li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
                            <li><a href="blog.html" class="slide-item"> Blog</a></li>
                            <li><a href="empty.html" class="slide-item"> Empty Page</a></li>
                            <li><a href="construction.html" class="slide-item"> Under Construction</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3>E-Commerce</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-shopping-cart"></i><span
                                class="side-menu__label">E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="shop.html" class="slide-item"> Shop</a></li>
                            <li><a href="shop-description.html" class="slide-item">Product Details</a></li>
                            <li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3>Custom & Error Pages</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-settings"></i><span class="side-menu__label">Custom
                                Pages</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="login.html" class="slide-item"> Login</a></li>
                            <li><a href="register.html" class="slide-item"> Register</a></li>
                            <li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
                            <li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon ti-info-alt"></i><span class="side-menu__label">Error
                                Pages</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="400.html" class="slide-item"> 400</a></li>
                            <li><a href="401.html" class="slide-item"> 401</a></li>
                            <li><a href="403.html" class="slide-item"> 403</a></li>
                            <li><a href="404.html" class="slide-item"> 404</a></li>
                            <li><a href="500.html" class="slide-item"> 500</a></li>
                            <li><a href="503.html" class="slide-item"> 503</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!--/APP-SIDEBAR-->
            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="container-fluid">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                        <!-- sidebar-toggle-->
                        <a class="header-brand" href="index.html">
                            <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('assets/images/brand/logo-3.png') }}" class="header-brand-img desktop-logo mobile-light"
                                alt="logo">
                        </a>
                        <div class="d-flex order-lg-2 ml-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-md-none" type="button"
                                data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                            </button>
                            <div class="dropdown profile-1">
                                <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
                                    <span>
                                        <img src="{{ asset('assets/images/users/10.jpg') }}" alt="profile-user"
                                            class="avatar  profile-user brround cover-image">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                            <small class="text-muted">Administrator</small>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="float-right"></span>
                                        <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                    </a>
                                    <a class="dropdown-item" href="login.html">
                                        <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown d-sm-flex">
                            <a href="#" class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-search"></i>
                            </a>
                            <div class="dropdown-menu header-search dropdown-menu-left">
                                <div class="input-group w-100 p-2">
                                    <input type="text" class="form-control " placeholder="Search....">
                                    <div class="input-group-append ">
                                        <button type="button" class="btn btn-primary ">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- SEARCH -->
                        <div class="dropdown d-md-flex">
                            <a class="nav-link icon full-screen-link nav-link-bg">
                                <i class="fe fe-maximize fullscreen-button"></i>
                            </a>
                        </div><!-- FULL-SCREEN -->
                        <div class="dropdown d-md-flex notifications">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <div class="notifications-menu">
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-success mr-3">
                                            <i class="fa fa-thumbs-o-up"></i>
                                        </div>
                                        <div class="">
                                            <strong>Someone likes our posts.</strong>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-primary mr-3">
                                            <i class="fa fa-commenting-o"></i>
                                        </div>
                                        <div class="">
                                            <strong>3 New Comments.</strong>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-danger mr-3">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <div class="">
                                            <strong>Server Rebooted</strong>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">View all Notification</a>
                            </div>
                        </div><!-- NOTIFICATIONS -->
                        <div class="dropdown d-md-flex message">
                            <a class="nav-link icon text-center" data-toggle="dropdown">
                                <i class="fe fe-mail"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <div class="message-menu">
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <span class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                            data-image-src="{{ asset('assets/images/users/1.jpg') }}"></span>
                                        <div>
                                            <strong>Madeleine</strong> Hey! there I' am available....
                                            <div class="small text-muted">
                                                3 hours ago
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <span class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                            data-image-src="{{ asset('assets/images/users/12.jpg') }}"></span>
                                        <div>
                                            <strong>Anthony</strong> New product Launching...
                                            <div class="small text-muted">
                                                5 hour ago
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <span class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                            data-image-src="{{ asset('assets/images/users/4.jpg') }}"></span>
                                        <div>
                                            <strong>Olivia</strong> New Schedule Realease......
                                            <div class="small text-muted">
                                                45 mintues ago
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <span class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                            data-image-src="{{ asset('assets/images/users/15.jpg') }}"></span>
                                        <div>
                                            <strong>Sanderson</strong> New Schedule Realease......
                                            <div class="small text-muted">
                                                2 days ago
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">See all Messages</a>
                            </div>
                        </div><!-- MESSAGE-BOX -->
                    </div>
                </div>
            </div>
            <!-- /Mobile Header -->
