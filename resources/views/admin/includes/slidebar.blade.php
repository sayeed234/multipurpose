<nav class="page-sidebar" id="sidebar">
<div id="sidebar-collapse">
<div class="admin-block d-flex">
    
</div>
<ul class="side-menu metismenu">
    <li>
        <a class="active" href="{{url('/admin-dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
            <span class="nav-label">Dashboard</span>
        </a>
    </li>
    <li class="heading">Business</li>
    @if(Session::get('adminrole')==1)
    <li>
        <a href="javascript:;"><i class="sidebar-item-icon fa fa-user-circle"></i>
            <span class="nav-label">Master Setup</span><i class="fa fa-angle-left arrow"></i></a>
        <ul class="nav-2-level collapse">
            <li><a class="" href="{{url('/company')}}">Company</a></li>                          
            <li><a class="" href="{{url('/user')}}">User</a></li>
            <li><a class="" href="{{url('/member')}}">Members</a></li> 
        </ul>
    </li>

    <li>
        <a href="javascript:;"><i class="sidebar-item-icon fa fa-money"></i>
            <span class="nav-label">Loan Setup</span><i class="fa fa-angle-left arrow"></i></a>
         <ul class="nav-2-level collapse">                                
            <li><a class="" href="{{url('/loan')}}">Loan</a></li>
            <li><a class="" href="{{url('/share')}}">Share</a></li>
            <li><a class="" href="{{url('/msp')}}">MSP</a></li>
        </ul>
    </li>

     <li>
        <a href="javascript:;"><i class="sidebar-item-icon fa fa-database"></i>
            <span class="nav-label">Collection Amount</span><i class="fa fa-angle-left arrow"></i></a>
        <ul class="nav-2-level collapse">
            <li><a class="" href="{{url('/daily_collection_admin')}}">Total Daily Collection</a></li> 
            <li><a class="" href="{{url('/kisti_collection_admin')}}"> Total Kisti Collection</a></li> 
    <li><a class="" href="{{url('/daily_collection')}}">Daily Collection</a></li> 
<li><a class="" href="{{url('/kisti_collection')}}"> </i>Kisti Collection</a></li>                       
        </ul>
    </li>
        <li>
        <a href="javascript:;"><i class="sidebar-item-icon fa fa-calculator"></i>
            <span class="nav-label">Account Setup</span><i class="fa fa-angle-left arrow"></i></a>
        <ul class="nav-2-level collapse">
            <li><a class="" href="{{url('/daily_expense')}}">Daily Expense</a></li> 
            
            
        </ul>
    </li>
    <li>
        <a href="javascript:;"><i class="sidebar-item-icon fa fa-print"></i>
            <span class="nav-label">Report</span><i class="fa fa-angle-left arrow"></i></a>
        <ul class="nav-2-level collapse">
                
            <li><a class="" href="{{url('/expense_report')}}">Expense Report</a></li>
            <li><a class="" href="{{url('/collection_report')}}">Collection Report</a></li>
            <li><a class="" href="{{url('/kisti_report')}}">Kisti Collection Report</a></li>           
            <li><a class="" href="{{url('/member_collection_report')}}">Member Collection Report</a></li>
            <li><a class="" href="{{url('/member_kisti_report')}}">Member Kisti Report</a></li>
            <li><a class="" href="{{url('/month_report')}}">Monthly Report</a></li>
            <li><a class="" href="{{url('/summary')}}">Summary Report</a></li>
            
        </ul>
    </li>
    <li><a class="" href="{{url('/close')}}"> <i class="sidebar-item-icon fa fa-close"></i> Close Transaction</a></li> 
 @endif
  @if(Session::get('adminrole')==2)  
<li><a class="" href="{{url('/member')}}"> <i class="sidebar-item-icon fa fa-users"></i> Members</a></li> 
 <li><a class="" href="{{url('/daily_collection')}}"> <i class="sidebar-item-icon fa fa-database"></i> Daily Collection</a></li> 
<li><a class="" href="{{url('/kisti_collection')}}"> <i class="sidebar-item-icon fa fa-database"></i>Kisti Collection</a></li>                       
 @endif

</ul>
</div>
</nav>