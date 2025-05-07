<?php 
    if(isset($student)){     
        // $db->pretty_print($student);

        // Academic Information
        $adacemic_sql = "SELECT yl.year_level, sd.strand, sc.section
                FROM 
                    student AS s
                JOIN 
                    year_level AS yl ON s.year_id = yl.year_level_id
                JOIN 
                    strand AS sd ON s.strand_id = sd.strand_id
                JOIN 
                    section AS sc ON s.section_id = sc.section_id
                WHERE 
                    student_id = {$student['student_id']}";

        $academic_info = $db->select_info_multiple_key($adacemic_sql)[0];

        // Address Information
        $address_sql = "SELECT a.address_id, r.region, p.province, m.municipality, b.brgy, a.specific_address, a.postal_code 
                FROM 
                    address AS a
                JOIN 
                    region AS r ON a.region_id = r.region_id
                JOIN 
                    province AS p ON a.province_id = p.province_id
                JOIN 
                    municipality AS m ON a.municipality_id = m.municipality_id
                JOIN 
                    brgy AS b ON a.brgy_id = b.brgy_id
                WHERE 
                    student_id = {$student['student_id']}";

        $address = $db->select_info_multiple_key($address_sql)[0];

        $baseUrl = dirname(dirname($_SERVER['PHP_SELF']));
        $actionUrl = $baseUrl . '/update-user-info.php';
    }

?>

<div class="tab-pane fade container-sm mt-4 pb-3" id="account">
    <div class="container my-2">
        <h5>
            Account
        </h5>
    </div>

    <div class="row g-3">

        <!-- User Information -->
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6>Profile <br>
                        <span class="text-muted description">Edit your information here</span>
                    </h6>
                </div>

                <div class="card-body" style="font-size: 14px;">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#personal">Personal</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="personal-tab" data-bs-toggle="tab" data-bs-target="#security">Security</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="nav-tabContent">
                        <!-- Personal Information -->
                        <div class="tab-pane fade show active" id="personal">
                            <form action="<?php echo htmlspecialchars($actionUrl) ?>" method="POST" class="row g-3" id="updateuser-form">
                                <!-- User ID -->
                                <input type="hidden" name="student-id" value="<?php echo $student["student_id"] ?>">
                                
                                <!-- Firstname  -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Firstname <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="firstname" id="firstname" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($student['first_name']) ? $student['first_name'] : 'Data Not Available' ?>">

                                </div>

                                <!-- Middlename -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Middlename (Optional)
                                    </label>

                                    <input type="text" name="middlename" id="middlename" class="form-control form-control-sm" autocomplete="off" value="<?php echo isset($student['middle_name']) ? $student['middle_name'] : "" ?>">
                                </div>

                                <!-- Lastname -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Lastname <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="lastname" id="lastname" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($student['last_name']) ? $student['last_name'] : 'Data Not Available' ?>">
                                </div>

                                <!-- Personal Email Address  -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Personal Email Address <span class="text-danger">*</span>
                                    </label>

                                    <input type="email" name="personal-emailaddress" id="personal-emailaddress" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($student['personal_email']) ? $student['personal_email'] : 'Data Not Available' ?>">
                                </div>

                                <!-- DMMMSU Email Address  -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        DMMMSU Email Address <span class="text-danger">*</span>
                                    </label>

                                    <input type="email" name="work-emailaddress" id="work-emailaddress" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($student['dmmmsu_email']) ? $student['dmmmsu_email'] : 'Data Not Available' ?>">
                                </div>

                                <!-- Contact Number -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Contact Number <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="contact" id="contact" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($student['contact_number']) ? $student['contact_number'] : 'Data Not Available' ?>">
                                </div>

                                <!-- Student ID No -->
                                <div class="col-lg-3">
                                    <label for="" class="form-label text-secondary">
                                        Student ID No <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="school-id" id="school-id" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($student['school_id']) ? $student['school_id'] : 'Data Not Available' ?>">
                                </div>

                                <!-- Year Level -->
                                <div class="col-lg-3">
                                    <label for="" class="form-label text-secondary">
                                        Year Level <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($academic_info['year_level']) ? $academic_info['year_level'] : 'Data Not Available' ?>" readonly>
                                </div>
                                
                                <!-- Strand -->
                                <div class="col-lg-3">
                                    <label for="" class="form-label text-secondary">
                                        Strand <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($academic_info['strand']) ? $academic_info['strand'] : 'Data Not Available' ?>" readonly>
                                </div>

                                <!-- Class Section -->
                                <div class="col-lg-3">
                                    <label for="" class="form-label text-secondary">
                                        Section <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($academic_info['section']) ? $academic_info['section'] : 'Data Not Available' ?>" readonly>
                                </div>

                                <!-- Region -->
                                <div class="col-lg-6">
                                    <label for="" class="form-label text-secondary">
                                        Region <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($address['region']) ? $address['region'] : 'Data Not Available' ?>" readonly>
                                </div>

                                <!-- Province -->
                                <div class="col-lg-6">
                                    <label for="" class="form-label text-secondary">
                                        Province <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($address['province']) ? $address['province'] : 'Data Not Available' ?>" readonly>
                                </div>

                                <!-- Municipality -->
                                <div class="col-lg-6">
                                    <label for="" class="form-label text-secondary">
                                        Municipality <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($address['municipality']) ? $address['municipality'] : 'Data Not Available' ?>" readonly>
                                </div>

                                <!-- Barangay -->
                                <div class="col-lg-6">
                                    <label for="" class="form-label text-secondary">
                                        Barangay <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-sm" required autocomplete="off" value="<?php echo isset($address['brgy']) ? $address['brgy'] : 'Data Not Available' ?>" readonly>
                                </div>

                                <!-- Additional Information (Address) -->
                                <div class="col-lg-8">
                                    <label for="" class="form-label text-secondary">
                                        Street Name, Building, House No. <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control form-control-sm" value="<?php echo isset($address['specific_address']) ? $address['specific_address'] : 'Data Not Available' ?>" readonly>
                                </div>

                                <!-- Postal Code -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Postal Code <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control form-control-sm" value="<?php echo isset($address['postal_code']) ? $address['postal_code'] : 'Data Not Available' ?>" readonly>
                                </div>

                                <button class="ms-auto col-auto btn btn-sm btn-primary" type="submit">Save changes</button>
                            </form>
                        </div>
                        
                        <!-- Security Information -->
                        <div class="tab-pane fade" id="security">
                            <form action="../update-password.php" method="post" id="updatepass-form" class="row g-3">
                                <!-- Password Fields -->
                                <div class="col-lg-6">
                                    <!-- User Id -->
                                    <input type="hidden" name="student-id" value="<?php echo isset($student['student_id']) ? $student['student_id'] : '' ?>">                                    
                                    <label for="" class="form-label text-secondary">Current Password <span class="text-danger">*</span></label>
                                    <input type="password" name="current-password" id="current-password" class="form-control form-control-sm">
                                    <br>
                                    <label for="" class="form-label text-secondary">New Password <span class="text-danger">*</span></label>
                                    <input type="password" name="new-password" id="new-password" class="form-control form-control-sm">
                                    <br>
                                    <label for="" class="form-label text-secondary">Confirm Password <span class="text-danger">*</span></label>
                                    <input type="password" name="confirm-password" id="confirm-password" class="form-control form-control-sm">
                                </div>

                                <!-- Password Requirements -->
                                <div class="col-lg-6 align-items-center">
                                    <p class="mb-2" style="font-size: 0.9rem;"> Password Requirements: </p>

                                    <p class="small-text text-muted" style="font-size: 0.8rem;">
                                        Your new password must satisfy all of these requirements:
                                    </p>

                                    <ul class="text-muted mb-0" style="font-size: 0.9rem;">
                                        <li>Minimum of 8 characters</li>
                                        <li>Must contain least one special character</li>
                                        <li>Must contain at least one number</li>
                                        <li>Must contain at leat one uppercase letter</li>
                                    </ul>
                                </div>

                                <div class="col-auto ms-auto">
                                    <button class="btn btn-sm btn-primary">
                                        Save changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- User Image -->
        <div class="col-md-4 col-12 rounded">

            <div class="card">
                <div class="card-header d-flex">
                    <?php 
                        $AVATAR_URL = "https://avatar.iran.liara.run/username?username={$student['first_name']}+{$student['last_name']}";
                    ?>
                    <img src="<?php echo empty($student['avatar_link']) ? $AVATAR_URL : $student['avatar_link'] ?>" alt="" class="profile rounded-circle img-thumbnail mx-auto">
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="card-title text-center">
                        <?php 
                            echo "{$student['first_name']} {$student['last_name']}";
                        ?>
                    </div>
                    
                    <!-- Change Image Input -->
                    <button class="btn btn-sm btn-primary">
                        Change Image
                    </button>

                    
                    <!-- Image Size Description -->
                    <div class="card-text rounded text-muted mt-2 border border-2 p-3" style="background-color: rgba(0, 0, 0, .03);">
                        <p class="text-center" style="font-size: 14px;">Upload a new profile. Larger image will be resized automatically<br><br>Maximum size is <span class="fw-bold">5mb</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>