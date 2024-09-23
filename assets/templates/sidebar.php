
<aside class="offcanvas offcanvas-start bg-dark px-2" id="sidebar">
    <div class="offcanvas-header border-bottom">
        <!-- Logo and Brand -->
        <div class="d-flex align-items-center justify-items-center gap-2">
            <img src="../assets/img/classhub_logo_orig.jpg" alt="" class="logo">
            <span class="text-light">Classhub</span>
        </div>
    </div>

    <ul class="nav nav-dark nav-pills flex-column gap-2 mt-4">
        <!-- Dashboard -->
        <li class="nav-item">
            <a href="" class="nav-link active text-light">
                <i data-feather="home" class="icon"></i>
                <span class="description">Dashboard</span>
            </a>
        </li>

        <!-- Quiz -->
        <li class="nav-item">
            <a href="" class="nav-link text-light">
                <i data-feather="list" class="icon"></i>
                <span class="description">Quizzes</span>
            </a>
        </li>

        <!-- Submenu for Quiz -->
        <!-- <div class="sub-menu collapse" id="quizSubmenu">
            <ul class="nav nav-dark flex-column ml-3">
                <li class="nav-item">
                    <a href="" class="nav-link text-light">
                        <i data-feather="book-open" class="icon"></i>
                        <span class="description">
                            Available Quizzes <span class="badge bg-danger ms-1" id="available-quizzes">4</span>
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link text-light">
                        <i data-feather="check-circle" class="icon"></i>
                        <span class="description">
                            Completed Quizzes <span class="badge bg-success ms-1" id="available-quizzes">3</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div> -->

        <!-- Grades -->
        <li class="nav-item position-relative">
            <a href="#" class="nav-link text-light d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#gradesSubmenu">
                <span class="d-flex align-items-center">
                    <i data-feather="bar-chart" class="icon"></i>
                    <span class="description ms-1">Grades</span>
                </span>
                <i data-feather="chevron-down" class="icon"></i>
            </a>
        </li>

        <!-- Submenu for Grades -->
        <div class="sub-menu collapse" id="gradesSubmenu">
            <ul class="nav nav-dark flex-column">
                <li class="nav-item">
                    <a href="" class="nav-link text-light">
                        <i data-feather="pie-chart" class="icon"></i>
                        <span class="description">
                            My Grades
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link text-light">
                        <i data-feather="book" class="icon"></i>
                        <span class="description">
                            Grade Log 
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Reports -->
        <li class="nav-item">
            <a href="" class="nav-link text-light d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#reportSubmenu">
                <span class="d-flex justify-content-center align-items-center">
                    <i data-feather="file-text" class="icon"></i>
                    <span class="description ms-1">Report</span>
                </span>
                <i data-feather="chevron-down" class="icon"></i>
            </a>
        </li>

        <!-- Submenu for Reports -->
        <div class="sub-menu collapse" id="reportSubmenu">
            <ul class="nav nav-dark flex-column ml-3">
                <li class="nav-item">
                    <a href="" class="nav-link text-light">
                        <i data-feather="download" class="icon"></i>
                        <span class="description">
                            Generate Report
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link text-light">
                        <i data-feather="book" class="icon"></i>
                        <span class="description">
                            Report Log
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Notification -->
        <li class="nav-item">
            <a href="" class="nav-link text-light">
                <i data-feather="bell" class="icon"></i>
                <span class="description">Notifications</span>
            </a>
        </li>
    </ul>
</aside>