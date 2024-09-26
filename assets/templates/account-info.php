<main class="container-sm mt-4 pb-3">
    <div class="mx-auto my-2">
        <h4>Account</h4>
    </div>

    <div class="row g-3">

        <!-- User Image -->
        <div class="col-md-4 col-12 rounded">

            <div class="card">
                <div class="card-header d-flex">
                    <img src="../assets/img/avatar/sample_profile.jpg" alt="" class="profile rounded-circle img-thumbnail mx-auto">
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="card-title text-center">Vincent Bolinget</div>
                    
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
                            <form action="" class="row g-3" id="form-updateinfo">
                                <!-- Firstname  -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Firstname <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="firstname" id="firstname" class="form-control form-control-sm" required autocomplete="off">
                                </div>

                                <!-- Middlename -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Middlename (Optional)
                                    </label>

                                    <input type="text" name="middlename" id="middlename" class="form-control form-control-sm" autocomplete="off">
                                </div>

                                <!-- Lastname -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Lastname <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="lastname" id="lastname" class="form-control form-control-sm" required autocomplete="off">
                                </div>

                                <!-- Personal Email Address  -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Personal Email Address <span class="text-danger">*</span>
                                    </label>

                                    <input type="email" name="personal-emailaddress" id="personal-emailaddress" class="form-control form-control-sm" required autocomplete="off">
                                </div>

                                <!-- DMMMSU Email Address  -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        DMMMSU Email Address <span class="text-danger">*</span>
                                    </label>

                                    <input type="email" name="work-emailaddress" id="work-emailaddress" class="form-control form-control-sm" required autocomplete="off">
                                </div>

                                <!-- Contact Number -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Contact Number <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="contact" id="contact" class="form-control form-control-sm" required autocomplete="off">
                                </div>

                                <!-- Student ID No -->
                                <div class="col-lg-3">
                                    <label for="" class="form-label text-secondary">
                                        Student ID No <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="student-id" id="student-id" class="form-control form-control-sm" required autocomplete="off">
                                </div>

                                <!-- Year Level -->
                                <div class="col-lg-3">
                                    <label for="" class="form-label text-secondary">
                                        Year Level <span class="text-danger">*</span>
                                    </label>

                                    <select name="year-level" id="year-level" class="form-select form-select-sm form-select-sm">
                                        <option value="">Select Year Level</option>
                                        <option value="7">Grade 7</option>
                                        <option value="8">Grade 8</option>
                                        <option value="9">Grade 9</option>
                                        <option value="10">Grade 10</option>
                                    </select>
                                </div>
                                
                                <!-- Strand -->
                                <div class="col-lg-3">
                                    <label for="" class="form-label text-secondary">
                                        Strand <span class="text-danger">*</span>
                                    </label>

                                    <select name="strand" id="strand-select" class="form-select form-select-sm">
                                        <option value="">Select Strand</option>
                                    </select>
                                </div>

                                <!-- Class Section -->
                                <div class="col-lg-3">
                                    <label for="" class="form-label text-secondary">
                                        Section <span class="text-danger">*</span>
                                    </label>

                                    <select name="section" id="section" class="form-select form-select-sm">
                                        <option value="">Select Section</option>
                                        <option value="A">Section A</option>
                                        <option value="B">Section B</option>
                                        <option value="C">Section C</option>
                                        <option value="D">Section D</option>
                                    </select>
                                </div>

                                <!-- Region -->
                                <div class="col-lg-6">
                                    <label for="" class="form-label text-secondary">
                                        Region <span class="text-danger">*</span>
                                    </label>
                                    <select name="region" id="region" class="form-select form-select-sm">
                                        <option value="">Select Region</option>
                                    </select>
                                </div>

                                <!-- Province -->
                                <div class="col-lg-6">
                                    <label for="" class="form-label text-secondary">
                                        Province <span class="text-danger">*</span>
                                    </label>
                                    <select name="province" id="province" class="form-select form-select-sm" >
                                        <option value="">Select Province</option>
                                    </select>
                                </div>

                                <!-- Municipality -->
                                <div class="col-lg-6">
                                    <label for="" class="form-label text-secondary">
                                        Municipality <span class="text-danger">*</span>
                                    </label>
                                    <select name="municipality" id="municipality" class="form-select form-select-sm" >
                                        <option value="">Select Municipality</option>
                                    </select>
                                </div>

                                <!-- Barangay -->
                                <div class="col-lg-6">
                                    <label for="" class="form-label text-secondary">
                                        Barangay <span class="text-danger">*</span>
                                    </label>
                                    <select name="barangay" id="barangay" class="form-select form-select-sm" >
                                        <option value="">Select Barangay</option>
                                    </select>
                                </div>

                                <!-- Additional Information (Address) -->
                                <div class="col-lg-8">
                                    <label for="" class="form-label text-secondary">
                                        Street Name, Building, House No. <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="specific-address" id="specific-address" class="form-control form-control-sm">
                                </div>

                                <!-- Postal Code -->
                                <div class="col-lg-4">
                                    <label for="" class="form-label text-secondary">
                                        Postal Code <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" name="postal-code" id="postal-code" class="form-control form-control-sm">
                                </div>

                                <button class="ms-auto col-auto btn btn-sm btn-primary" type="submit">Save changes</button>
                            </form>
                        </div>
                        
                        <!-- Security Information -->
                        <div class="tab-pane fade" id="security">
                            <form action="" method="post" class="row g-3">
                                <!-- Password Fields -->
                                <div class="col-lg-6">
                                    <label for="" class="form-label text-secondary">Current Password <span class="text-danger">*</span></label>
                                    <input type="password" name="new-password" id="new-password" class="form-control form-control-sm">
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
    </div>
</main>