<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a href="{{url('/admin')}}"><img src="{{asset('frontend/images/logo/logo-1.png')}}" alt="logo"></a>
							<div class="menu-toggle-button">
								<a class="nav-link wave-effect" href="#" id="sidebarCollapse">
									<span class="fa fa-bars"></span>
								</a>
							</div>
							<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
								<div class="p-2">
									<form class="input-icon ">
										<div class="input-icon-addon">
											<i class="fe fe-search"></i>
										</div>
										<input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
									</form>
								</div>

								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fa fa-expand" id="fullscreen-button"></i>
									</a>
								</div>

								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-bell-o"></i>
										@isset($neworder)
										<span class="nav-unread bg-warning"></span>
										@endisset
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										@isset($neworder)
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div>
												<strong>New Order</strong>
												
											</div>
										</a>
										@endisset
										
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notification</a>
									</div>
								</div>
								
								<div class="dropdown text-center selector">
									<a href="#" class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown">{{ Auth::user()->name }}</a>
											{{-- <span class="text-center user-semi-title text-dark">web designer</span> --}}
											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
										</a>
										
										<a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="dropdown-icon mdi  mdi-logout-variant"></i>Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>