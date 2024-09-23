<nav class="navbar border bg-light sticky-top">
    <div class="container-fluid">

        <!-- Toggle Button -->
        <button class="btn text-muted" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
            <i data-feather="menu"></i>
        </button>

        <div>
            <!-- Role -->
            <span class="badge bg-primary">student</span>

            <!-- Account Actions -->
            <div class="btn-group">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <img src="../assets/img/avatar/sample_profile.jpg" alt="" class="avatar rounded-circle img-thumbnail">
                </button>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <p class="dropdown-item-text">
                            <span id="username">
                                Test User
                            </span><br>
                            <span id="user-email" class="text-muted overflow-hidden">
                                testuser@gmail.com
                            </span>
                        </p>
                    </li>

                    <li class="dropdown-divider"></li>

                    <li>
                        <a href="user-account.php" class="dropdown-item">
                            <i data-feather="user" class="icon"></i>
                            Account
                        </a>
                    </li>

                    <li>
                        <a href="" class="dropdown-item">
                            <i data-feather="log-out" class="icon"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>