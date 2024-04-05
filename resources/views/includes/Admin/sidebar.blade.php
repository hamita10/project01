<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{route('Admin.dashboard')}}" class=" waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>

               

                <li class="menu-title" key="t-apps">Information</li>
                <li>
                    <a href="{{route('Admin.enquiry.index')}}" class=" waves-effect">
                        <i class='bx bx-message-rounded-dots'></i>
                        <span key="t-dashboards">Enquiry</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Admin.batchsystem')}}" class=" waves-effect">
                        <i class='bx bxs-stopwatch'></i>
                        <span key="t-dashboards">Batchsystem</span>
                    </a>
                </li>
                <li>
                  <a href="{{route('Admin.admission')}}" class=" waves-effect">
                    <i class='bx bxs-id-card'></i>
                    <span key="t-dashboards">Admission</span>
                  </a>
                </li>
                <li>
                   <a href="{{route('Admin.teacher')}}" class=" waves-effect">
                    <i class='bx bxs-user-pin'></i>
                    <span key="t-dashboards">Teacher</span>
                   </a>
                </li>  
            <li>
                <a href="{{route('Admin.leaverequest')}}" class=" waves-effect">
                    <i class='bx bx-log-in'></i>    
                    <span key="t-dashboards">Leave Request</span>
                </a>
            </li>  
            <li>
                <a href="{{route('Admin.course')}}" class=" waves-effect">
                    <i class='bx bxs-food-menu'></i>
                    <span key="t-dashboards">Course</span>
                </a>
            </li>   
            <li>
                <a href="{{route('Admin.subject')}}" class=" waves-effect">
                    <i class='fas fa-book-reader'></i>
                    <span key="t-dashboards">Subject</span>
                </a>
            </li>  
            <li>
                <a href="{{route('Admin.asign')}}" class=" waves-effect">
                    <i class='bx bx-task'></i>
                    <span key="t-dashboards">Asign</span>
                </a>
            </li>   
            <li>
                <a href="{{route('Admin.thoughts')}}" class=" waves-effect">
                    <i class='bx bxs-star-half'></i>
                    <span key="t-dashboards">Thoughts</span>
                </a>
            </li> 
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->