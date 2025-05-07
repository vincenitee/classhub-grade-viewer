<aside class="bg-dark px-3 sticky-top" id="sidebar">
    <!-- Logo and Brand -->
    <div class="mt-3 p-3 border-bottom">
        <div class="d-flex align-items-center justify-content-center gap-2" id="logo-container">
            <img src="../assets/img/classhub_logo_orig.jpg" alt="Classhub Logo" class="logo">
            <span class="text-light">Classhub</span>
        </div>
    </div>

    <!-- Navbar Menus -->
    <ul class="nav nav-pills flex-column mt-3 gap-2">

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link active text-light d-sm-flex justify-content-start align-items-center gap-1" id="dashboard-pill" data-bs-toggle="pill" data-bs-target="#dashboard" aria-controls="grades" aria-selected="false">
                <i data-feather="home" class="icon mb-1"></i>
                <span class="description d-block pe-none">Dashboard</span>    
            </a>
        </li>

        <!-- Grades -->
        <li class="nav-item">
            <a class="nav-link text-light d-sm-flex justify-content-start align-items-center gap-1" id="grade-pill" data-bs-toggle="pill" data-bs-target="#grades" aria-controls="grades" aria-selected="false" >
                <i data-feather="pie-chart" class="icon mb-1"></i>
                <span class="description d-block pe-none">Grades</span>
            </a>
        </li>

        <!-- Account -->
        <li class="nav-item d-none">
            <a class="nav-link text-light d-sm-flex justify-content-start align-items-center gap-1" id="account-pill" data-bs-toggle="pill" data-bs-target="#account" aria-controls="account" aria-selected="false">
                <i data-feather="user" class="icon mb-1"></i>
                <span class="description d-block pe-none">Account</span>
            </a>
        </li>
    </ul>
</aside>
        