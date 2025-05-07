<nav class="navbar border bg-light sticky-top w-100" style="height: 5rem; ">
    <div class="container-fluid">

        <!-- Toggle Button -->
        <button class="btn text-muted" type="button" id="toggleSidebarBtn">
            <i data-feather="menu"></i>
        </button>

        <div>
            <!-- Role -->
            <span class="badge bg-primary">student</span>

            <!-- Account Actions -->
            <div class="btn-group">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <?php 
                        $AVATAR_URL = "https://avatar.iran.liara.run/username?username={$student['first_name']}+{$student['last_name']}";
                    ?>
                    <img src="<?php echo empty($student['avatar_link']) ? $AVATAR_URL : $student['avatar_link'] ?>" alt="" class="avatar rounded-circle img-thumbnail">
                </button>

                <ul class="dropdown-menu dropdown-menu-end" id="account-dropdown">
                    <li>
                        <p class="dropdown-item-text">
                            <span id="username">
                                <?php 
                                    echo isset($student) ? "{$student['first_name']} {$student['last_name']}" : 'User not found'; 
                                ?>
                            </span><br>
                            <span id="user-email" class="text-muted overflow-hidden">
                                <?php 
                                    echo isset($student) ? "{$student['dmmmsu_email']}" : 'User not found'; 
                                ?>
                            </span>
                        </p>
                    </li>

                    <li class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item pe-auto" onclick="togglePill('account-pill')">
                            <i data-feather="user" class="icon"></i>
                            <span class="pe-none">Account</span>
                        </a>
                    </li>

                    <li>
                        <a href="../logout.php" class="dropdown-item" id="logout">
                            <i data-feather="log-out" class="icon"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>