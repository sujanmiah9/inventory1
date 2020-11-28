<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
            <img src="{{asset('asset')}}/assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">Wahid Sujan</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{route('dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-cart-plus"></i>
                    <span class="nav-label">Pos</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        
                        <a href=""><i class="sidebar-item-icon fa fa-file-text"></i> Invoice</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-universal-access"></i>
                    <span class="nav-label">Sales</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="sidebar-item-icon fa fa-universal-access"></i> Sales</a>
                        <a href=""><i class="sidebar-item-icon fa fa-info-circle"></i> Sales Details</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                    <span class="nav-label">Purches</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href=""><i class="sidebar-item-icon fa fa-shopping-basket"></i> Purches</a>
                        <a href=""><i class="sidebar-item-icon fa fa-info-circle"></i>Purches Details</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="calendar.html"><i class="sidebar-item-icon fa fa-archive"></i>
                    <span class="nav-label">Stock</span>
                </a>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">Customer</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.customer')}}">Add Customers</a>
                    </li>
                    <li>
                        <a href="{{route('index.customer')}}">All Customers</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                    <span class="nav-label">Employee</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.employee')}}">Add Employee</a>
                    </li>
                    <li>
                        <a href="{{route('index.employee')}}">All Employee</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                    <span class="nav-label">Suppliers</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.supplier')}}">Add Supplier</a>
                    </li>
                    <li>
                        <a href="{{route('index.supplier')}}">All Supplier</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bar-chart"></i>
                    <span class="nav-label">Salary</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="charts_flot.html">Add Advance Salary</a>
                    </li>
                    <li>
                        <a href="charts_morris.html">All advance Salary</a>
                    </li>
                    <li>
                        <a href="chartjs.html">Pay Salary</a>
                    </li>
                    <li>
                        <a href="charts_sparkline.html">Last Month Salary</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                    <span class="nav-label">Catagory</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.category')}}">Add Catagory</a>
                    </li>
                    <li>
                        <a href="{{route('index.category')}}">All Catagory</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                    <span class="nav-label">Products</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.product')}}">Add Products</a>
                    </li>
                    <li>
                        <a href="{{route('index.product')}}">All Products</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-map"></i>
                    <span class="nav-label">Expenses</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.expense')}}">Add Expenses</a>
                    </li>
                    <li>
                        <a href="{{route('daily.expense')}}">Daily Expenses</a>
                    </li>
                    <li>
                        <a href="{{route('monthly.expense')}}">Monthly Expenses</a>
                    </li>
                    <li>
                        <a href="{{route('yearly.expense')}}">Yearly Expenses</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                    <span class="nav-label">Attendence</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('daily.attendence')}}">Daily Attendence</a>
                    </li>
                    <li>
                        <a href="{{route('all.attendence')}}">All Attendence</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="calendar.html"><i class="sidebar-item-icon fa fa-cog"></i>
                    <span class="nav-label">Setting</span>
                </a>
            </li>
        </ul>
    </div>
</nav>