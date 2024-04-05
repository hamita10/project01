<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{route('Teacher.dashboard')}}" class=" waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>
               <li class="menu-title" key="t-apps">Information</li>
               <li>
                <a href="{{route('Teacher.student')}}" class=" waves-effect">
                <i class="fas fa-restroom font-size-15"></i>   
                    <span key="t-dashboards">Student</span>
                </a>
            </li>
            <li>
                <a href="{{route('Teacher.attendance')}}" class=" waves-effect">
                    <i class="bx bx-calendar-plus"></i>
                    <span key="t-dashboards">Attendance</span>
                </a>
            </li>
            <li>
                <a href="{{route('Teacher.leave')}}" class=" waves-effect">
                    <i class='bx bx-edit'></i>
                    <span key="t-dashboards">Leave</span>
                </a>
            </li>
         </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->