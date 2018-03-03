<!-- Sidebar -->
<div id="sidebar-wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h5 id="user"></h5>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="/home">
                    <i class="fas fa-circle-notch"></i>&nbsp;&nbsp;
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-users"></i>&nbsp;&nbsp;
                    <span class="text">Vendors</span>
                    <span class="pull-right"><i class="fas fa-caret-down"></i></span>
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="{{ route('vendors.index') }}"><span class="text">All Vendors</span></a></li>
                    <li><a href="{{ route('vendors.create') }}"><span class="text">Add Vendor</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-car"></i>&nbsp;&nbsp;
                    <span class="text">Cars</span>
                    <span class="pull-right"><i class="fas fa-caret-down"></i></span>
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="{{ route('cars.index') }}"><span class="text">All Cars</span></a></li>
                    <li><a href="{{ route('cars.create') }}"><span class="text">Add Car</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#customerSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-user-secret"></i>&nbsp;&nbsp;
                    <span class="text">Customers</span>
                    <span class="pull-right"><i class="fas fa-caret-down"></i></span>
                </a>
                <ul class="collapse list-unstyled" id="customerSubmenu">
                    <li><a href="{{ route('customers.index') }}"><span class="text">All Customers</span></a></li>
                    <li><a href="{{ route('customers.create') }}"><span class="text">Add Customers</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#staffSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-cogs"></i>&nbsp;&nbsp;
                    <span class="text">Staff</span>
                    <span class="pull-right"><i class="fas fa-caret-down"></i></span>
                </a>
                <ul class="collapse list-unstyled" id="staffSubmenu">
                    <li><a href="{{ route('staff.index') }}"><span class="text">All Staff</span></a></li>
                    <li><a href="{{ route('staff.create') }}"><span class="text">Add Staff</span></a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('bookings.create') }}">
                    <i class="fas fa-road"></i>&nbsp;&nbsp;
                    <span class="text">Bookings</span>
                    <!-- <span class="pull-right"><i class="fas fa-caret-down"></i></span> -->
                </a><!--
                        <ul class="collapse list-unstyled" id="bookingSubmenu">
                            <li><a href="#">All Staff</a></li>
                            <li><a href="#">Add Staff</a></li>
                        </ul> -->
            </li>
            <li>
                <a href="#" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-credit-card"></i>&nbsp;&nbsp;
                    <span class="text">Billings</span>
                    <!-- <span class="pull-right"><i class="fas fa-caret-down"></i></span> -->
                </a>
                <!-- <ul class="collapse list-unstyled" id="billingSubmenu">
                    <li><a href="#">All Staff</a></li>
                    <li><a href="#">Add Staff</a></li>
                </ul> -->
            </li>
            <li>
                <a href="#billingSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-wrench"></i>&nbsp;&nbsp;
                    <span class="text">Manage</span>
                    <span class="pull-right"><i class="fas fa-caret-down"></i></span>
                </a>
                <ul class="collapse list-unstyled" id="billingSubmenu">
                    <li><a href="#"><span class="text">Users</span></a></li>
                    <li><a href="#"><span class="text">Add Users</span></a></li>
                </ul>
            </li>

        </ul>
    </nav>

</div>