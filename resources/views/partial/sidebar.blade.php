<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
            <img src="{{asset('/'.auth()->user()->photo)}}"  style="height:50px; width:50px; border-radius:50%;" />
            </div>
            <div class="admin-info">
            <div class="font-strong">{{auth()->user()->name}}</div><small>Administrator</small></div>
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
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-shopping-basket"></i>
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
                    <span class="nav-label">Stock</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                    <a href="{{route('view.stock')}}"><i class="sidebar-item-icon fa fa-info-circle"></i>Stock Details</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-user"></i>
                    <span class="nav-label">Employee</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.employee')}}"><i class="fa fa-plus-circle"></i> Add Employee</a>
                    </li>
                    <li>
                        <a href="{{route('index.employee')}}"><i class="fa fa-globe"></i> All Employee</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-user-circle"></i>
                    <span class="nav-label">Suppliers</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.supplier')}}"><i class="fa fa-plus-circle"></i> Add Supplier</a>
                    </li>
                    <li>
                        <a href="{{route('index.supplier')}}"><i class="fa fa-globe"></i> All Supplier</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-crosshairs"></i>
                    <span class="nav-label">Catagory</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.category')}}"><i class="fa fa-plus-circle"></i> Add Catagory</a>
                    </li>
                    <li>
                        <a href="{{route('index.category')}}"><i class="fa fa-globe"></i> All Catagory</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-product-hunt"></i>
                    <span class="nav-label">Products</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.product')}}"><i class="fa fa-plus-circle"></i> Add Products</a>
                    </li>
                    <li>
                        <a href="{{route('index.product')}}"><i class="fa fa-globe"></i> All Products</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-money"></i>
                    <span class="nav-label">Expenses</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('create.expense')}}"><i class="fa fa-plus"></i> Add Expenses</a>
                    </li>
                    <li>
                        <a href="{{route('daily.expense')}}"><i class="fa fa-tint"></i> Daily Expenses</a>
                    </li>
                    <li>
                        <a href="{{route('monthly.expense')}}"><i class="fa fa-calendar-o"></i> Monthly Expenses</a>
                    </li>
                    <li>
                        <a href="{{route('yearly.expense')}}"><i class="fa fa-calendar"></i> Yearly Expenses</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-eye"></i>
                    <span class="nav-label">Attendence</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('daily.attendence')}}"><i class="fa fa-tint"></i> Daily Attendence</a>
                    </li>
                    <li>
                        <a href="{{route('all.attendence')}}"><i class="fa fa-globe"></i> All Attendence</a>
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