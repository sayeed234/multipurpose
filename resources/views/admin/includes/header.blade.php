        <header class="header" id="header">
            <div class="page-brand">
                <a class="link" href="{{url('/admin-dashboard')}}">
                    <span class="brand">
                    <?php $result=DB::table('companies')->first(); ?> 
                        <span class="brand-tip"><marquee>{{$result->company_name}}</marquee></span>
                    </span>
                    <span class="brand-mini">LS Soft</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </li>
                      <li>
                      
                            <span class="badge badge-primary">  <?php echo date("l j.F Y h:i A")?></span>

                         
                        
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                <li>
                 @if (session('war'))
                        <div class="alert alert-dismissible alert-warning">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong> Please Select Member </strong>
                        </div>
                    @endif
                   @if (session('delete'))
                        <div class="alert alert-dismissible alert-danger">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong> Delete Successfully</strong>
                        </div>
                    @endif

                        @if (session('add'))
                        <div class="alert alert-dismissible alert-success">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong> Successfully Added</strong>
                        </div>
                    @endif
                    @if (session('update'))
                        <div class="alert alert-dismissible alert-info">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong> Successfully Updated</strong>
                        </div>
                    @endif
                </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="{{asset('public/admin/')}}/assets/img/admin-avatar.png" />
                        <span></span>{{session('adminname')}}<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">

                          @if(Session::get('adminrole')==1)
                            <a class="dropdown-item" href="{{route('profile')}}"><i class="fa fa-user"></i>Profile</a>
                            @endif

                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="{{url('/logout')}}"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>