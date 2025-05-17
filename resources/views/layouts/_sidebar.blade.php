<div class="sidebar">
    <h4>Admin Panel</h4>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ url('superadmin/dashboard') }}"
               class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                <i class="fa fa-tachometer-alt"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('superadmin/user/list') }}"
               class="nav-link @if(Request::segment(2) == 'user') active @endif">
                <i class="fa fa-list"></i> List User
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('superadmin/students/list') }}"
               class="nav-link @if(Request::segment(2) == 'students') active @endif">
                <i class="fa fa-book-reader"></i> Students
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('superadmin/teachers/list') }}"
               class="nav-link @if(Request::segment(2) == 'teachers') active @endif">
                <i class="fa fa-graduation-cap"></i> Teachers
            </a>
        </li>
        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-user-graduate"></i> Subjects</a></li>
        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-theater-masks"></i> Classes</a></li>
        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-award"></i> Enrollments</a></li>
        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-credit-card"></i> Payments</a></li>
        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-school-circle-check"></i> Attendance</a></li>
        <li class="nav-item"><a href="{{ url('logout') }}" class="nav-link"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>
<div class="content">
    <nav class="navbar">
        <span style="color: yellow;">Contact For Website Related Services +7 (906) 129-10-66</span>
        <a href="#"><i class="fa fa-user"></i> Profile</a>
    </nav>
    <div class="container mt-4">
        <div class="row">
