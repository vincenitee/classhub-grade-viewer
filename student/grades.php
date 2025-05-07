<div class="tab-pane fade mt-3" id="grades" role="tabpanel" aria-labelledby="grades-tab">
    <!-- Greetings -->
    <div class="container">
        <h5>
            Grades
        </h5>
    </div>

    <!-- Grades -->
    <div class="container">
        <div class="row gy-2">
            <!-- Grades Section -->
            <div class="col-12">
                <!-- Print Form -->
                <div class="container border rounded bg-light p-2">
                    <h6>Print Grades</h6>
                    <form action="print-grade.php" method="get" class="d-flex gap-2 m-2 sticky-top">
                        <select name="school-year" id="school-year" class="form-select form-select-sm" style="width: fit-content;">
                            <option value="">Select School Year</option>
                            <option value="">2023-2024</option>
                            <option value="">2024-2025</option>
                        </select>
                        <select name="semester" id="school-year" class="form-select form-select-sm" style="width: fit-content;">
                            <option value="">Select Semester</option>
                            <option value="">1st Semester</option>
                            <option value="">2nd Semester</option>
                        </select>
                        <button class="btn btn-sm btn-success text-light d-flex align-items-center" type="button" type="submit">
                            <i data-feather="table" style="height: 16px;"></i>
                            <span>Show Results</span>
                        </button>
                        <button class="btn btn-sm btn-primary d-flex align-items-center ms-auto" type="button" onclick="window.print()">
                            <i data-feather="printer" style="height: 16px;"></i>
                            <span>Print</span>
                        </button>
                    </form>
                </div>

            </div>
            <div class="col overflow-auto">
                <div class="container border rounded bg-light p-2">
                <h6 class="p-2">Grades Overview</h6>
                    <canvas id="gradeChart"></canvas>
                </div>
            </div>

            <div class="col">
                <div class="container border rounded bg-light p-2">
                    <h6 class="p-2">Current Grades</h6>
                    <table class="table table-striped table-responsive table-sm table-hover" style="font-size: 14px;">
                        <thead>
                            <tr class="text-secondary">
                                <th>#</th>
                                <th>Subject</th>
                                <th>Teacher</th>
                                <th>Quarter Grade</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mathematics</td>
                                <td>Juliana R. Romero</td>
                                <td>87</td>
                                <td>
                                    <span class="badge bg-success">Passed</span>
                                </td>
                            </tr>

                            <!-- Average -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>