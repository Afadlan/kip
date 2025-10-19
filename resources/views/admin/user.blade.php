<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database- Kampong Inggris Pare</title>



<link rel="shortcut icon" href="{{ asset("templates/backend/")  }}/assets/compiled/svg/fav.jpg" type="image">
<link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">


  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/table-datatable-jquery.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app-dark.css">
</head>

<body>
    <script src="{{ asset("templates/backend/")  }}/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="/dashboard-admin"><img src="{{ asset("templates/backend/")  }}/assets/compiled/png/logo.png" alt="Logo" style="height: 60px; width: auto;" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--system-uicons" width="20" height="20"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                            opacity=".3"></path>
                        <g transform="translate(-210 -1)">
                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                            <circle cx="220.5" cy="11.5" r="4"></circle>
                            <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                        </g>
                    </g>
                </svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                    <label class="form-check-label"></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                    </path>
                </svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
   <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li
                class="sidebar-item ">
                <a href="/dashboard-admin" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Overview</span>
                </a>


            </li>

            <li
                class="sidebar-item ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Add Placement Test</span>
                </a>

            </li>

            <li
                class="sidebar-item ">
                <a href="/add-user" class='sidebar-link'>
                    <i class="bi bi-person-plus-fill"></i>
                    <span>Add User</span>
                </a>


            </li>

            <li
                class="sidebar-item  ">
                <a href="/edit-exam" class='sidebar-link'>
                    <i class="bi bi-pentagon"></i>
                    <span>Add Exam</span>
                </a>


            </li>
            <li
                class="sidebar-item active ">
                <a href="/data-admin" class='sidebar-link'>
                    <i class="bi bi-database-fill"></i>
                    <span>Database</span>
                </a>


            </li>


            <li
                class="sidebar-item ">
                <a href="/login" class='sidebar-link'>
                    <i class="bi bi-door-open-fill"></i>
                    <span>Log out</span>
                </a>


            </li>


        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Accounts</h3>
                <p class="text-subtitle text-muted">Manage all user data including students, mentors, and test results.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-admin.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Accounts</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Student and Mentor Accounts Table start -->
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">User Accounts</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="student-tab" data-bs-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Students</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="mentor-tab" data-bs-toggle="tab" href="#mentor" role="tab" aria-controls="mentor" aria-selected="false">Mentors</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
                                <div class="table-responsive py-3">
                                    <table class="table" id="table-students">
                                        <thead>
                                            <tr>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Kursus</th>
                                                <th>Status</th>
                                                <th>Terakhir Online</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><div class="avatar avatar-md"><img src="{{ asset("templates/backend/")  }}/assets/static/images/faces/5.jpg"></div></td>
                                                <td>Graiden</td>
                                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                                <td>********</td>
                                                <td><span class="badge bg-light-secondary">Student</span></td>
                                                <td>
                                                    <span class="badge bg-light-primary">TOEFL Preparation</span>
                                                    <span class="badge bg-light-info">Grammar Focus</span>
                                                </td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td><small class="text-muted">2 jam yang lalu</small></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm icon btn-primary edit-user-btn" data-bs-toggle="modal" data-bs-target="#editUserModal" data-id="1" data-name="Graiden" data-email="vehicula.aliquet@semconsequat.co.uk" data-role="Student" data-status="Active" data-courses="TOEFL Preparation,Grammar Focus" data-last-online="2 jam yang lalu"><i class="bi bi-pencil"></i></a>
                                                    <a href="#" class="btn btn-sm icon btn-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><div class="avatar avatar-md"><img src="{{ asset("templates/backend/")  }}/assets/static/images/faces/2.jpg"></div></td>
                                                <td>Dale</td>
                                                <td>fringilla.euismod.enim@quam.ca</td>
                                                <td>********</td>
                                                <td><span class="badge bg-light-secondary">Student</span></td>
                                                <td>
                                                    <span class="badge bg-light-success">IELTS Simulation</span>
                                                </td>
                                                <td><span class="badge bg-danger">Inactive</span></td>
                                                <td><small class="text-muted">3 hari yang lalu</small></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm icon btn-primary edit-user-btn" data-bs-toggle="modal" data-bs-target="#editUserModal" data-id="2" data-name="Dale" data-email="fringilla.euismod.enim@quam.ca" data-role="Student" data-status="Inactive" data-courses="IELTS Simulation" data-last-online="3 hari yang lalu"><i class="bi bi-pencil"></i></a>
                                                    <a href="#" class="btn btn-sm icon btn-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><div class="avatar avatar-md"><img src="{{ asset("templates/backend/")  }}/assets/static/images/faces/1.jpg"></div></td>
                                                <td>Nathaniel</td>
                                                <td>mi.Duis@diam.edu</td>
                                                <td>********</td>
                                                <td><span class="badge bg-light-secondary">Student</span></td>
                                                <td>
                                                    <span class="badge bg-light-warning">Speaking Practice</span>
                                                    <span class="badge bg-light-info">Grammar Focus</span>
                                                </td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td><small class="text-muted">30 menit yang lalu</small></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm icon btn-primary edit-user-btn" data-bs-toggle="modal" data-bs-target="#editUserModal" data-id="5" data-name="Nathaniel" data-email="mi.Duis@diam.edu" data-role="Student" data-status="Active" data-courses="Speaking Practice,Grammar Focus" data-last-online="30 menit yang lalu"><i class="bi bi-pencil"></i></a>
                                                    <a href="#" class="btn btn-sm icon btn-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mentor" role="tabpanel" aria-labelledby="mentor-tab">
                                <div class="table-responsive py-3">
                                    <table class="table" id="table-mentors">
                                        <thead>
                                            <tr>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Terakhir Online</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><div class="avatar avatar-md"><img src="{{ asset("templates/backend/")  }}/assets/static/images/faces/4.jpg"></div></td>
                                                <td>ATAR</td>
                                                <td>atar@mentor.com</td>
                                                <td>********</td>
                                                <td><span class="badge bg-light-info">Mentor</span></td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td><small class="text-muted">1 jam yang lalu</small></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm icon btn-primary edit-user-btn" data-bs-toggle="modal" data-bs-target="#editUserModal" data-id="3" data-name="ATAR" data-email="atar@mentor.com" data-role="Mentor" data-status="Active" data-last-online="1 jam yang lalu"><i class="bi bi-pencil"></i></a>
                                                    <a href="#" class="btn btn-sm icon btn-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><div class="avatar avatar-md"><img src="{{ asset("templates/backend/")  }}/assets/static/images/faces/3.jpg"></div></td>
                                                <td>RYAN</td>
                                                <td>ryan@mentor.com</td>
                                                <td>********</td>
                                                <td><span class="badge bg-light-info">Mentor</span></td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td><small class="text-muted">15 menit yang lalu</small></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm icon btn-primary edit-user-btn" data-bs-toggle="modal" data-bs-target="#editUserModal" data-id="4" data-name="RYAN" data-email="ryan@mentor.com" data-role="Mentor" data-status="Active" data-last-online="15 menit yang lalu"><i class="bi bi-pencil"></i></a>
                                                    <a href="#" class="btn btn-sm icon btn-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Student and Mentor Accounts Table end -->

    <!-- Exam Results Table start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Exam Results</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table-exam-results">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Exam Name</th>
                                <th>Score</th>
                                <th class="text-center">Certificate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Graiden</td>
                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                <td>TOEFL Prediction</td>
                                <td>550</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm icon btn-secondary view-pdf-btn" data-bs-toggle="modal" data-bs-target="#pdfViewerModal" data-pdf-src="{{ asset("templates/backend/")  }}/assets/static/pdfs/sample-certificate-1.pdf"><i class="bi bi-file-earmark-pdf-fill"></i> View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Dale</td>
                                <td>fringilla.euismod.enim@quam.ca</td>
                                <td>IELTS Simulation</td>
                                <td>7.5</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm icon btn-secondary view-pdf-btn" data-bs-toggle="modal" data-bs-target="#pdfViewerModal" data-pdf-src="{{ asset("templates/backend/")  }}/assets/static/pdfs/sample-certificate-2.pdf"><i class="bi bi-file-earmark-pdf-fill"></i> View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Exam Results Table end -->

    <!-- Placement Test Results Table start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Placement Test Results</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table-placement-results">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Recommended Course</th>
                                <th>Level</th>
                                <th class="text-center">Certificate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nathaniel</td>
                                <td>mi.Duis@diam.edu</td>
                                <td>Grammar Focus</td>
                                <td><span class="badge bg-light-warning">Level 2</span></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm icon btn-info view-pdf-btn" data-bs-toggle="modal" data-bs-target="#pdfViewerModal" data-pdf-src="{{ asset("templates/backend/")  }}/assets/static/pdfs/placement-certificate-1.pdf"><i class="bi bi-file-earmark-pdf-fill"></i> View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Darius (Non-User)</td>
                                <td>velit@nec.com</td>
                                <td>Speaking Practice</td>
                                <td><span class="badge bg-light-success">Level 3</span></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm icon btn-info view-pdf-btn" data-bs-toggle="modal" data-bs-target="#pdfViewerModal" data-pdf-src="{{ asset("templates/backend/")  }}/assets/static/pdfs/placement-certificate-2.pdf"><i class="bi bi-file-earmark-pdf-fill"></i> View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Placement Test Results Table end -->

</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editUserForm">
                    <input type="hidden" id="edit-user-id" name="id">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="edit-name">Full Name</label>
                                <input type="text" id="edit-name" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="edit-email">Email</label>
                                <input type="email" id="edit-email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="edit-password">New Password</label>
                                <div class="input-group">
                                    <input type="password" id="edit-password" class="form-control" name="password" placeholder="Leave blank to keep current password">
                                    <span class="input-group-text" id="toggle-password" style="cursor: pointer;"><i class="bi bi-eye-fill"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="edit-role">Role</label>
                                <select class="form-select" id="edit-role" name="role" required>
                                    <option value="Student">Student</option>
                                    <option value="Mentor">Mentor</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="edit-status">Status</label>
                                <select class="form-select" id="edit-status" name="status" required>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12" id="courses-field">
                            <div class="form-group">
                                <label for="edit-courses">Kursus yang Diambil</label>
                                <input type="text" id="edit-courses" class="form-control" name="courses" placeholder="Pisahkan dengan koma">
                                <small class="text-muted">Contoh: TOEFL Preparation, Grammar Focus</small>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="edit-last-online">Terakhir Online</label>
                                <input type="text" id="edit-last-online" class="form-control" name="last-online" placeholder="Contoh: 2 jam yang lalu">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="editUserForm" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- PDF Viewer Modal -->
<div class="modal fade" id="pdfViewerModal" tabindex="-1" aria-labelledby="pdfViewerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfViewerModalLabel">Certificate Viewer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="pdf-iframe" src="" style="width:100%; height:75vh;" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>

            <footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2025 @Kampong Inggris Pare</p>
        </div>
    </div>
</footer>

        </div>
    </div>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="assets/compiled/js/app.js"></script>



<script src="assets/extensions/jquery/jquery.min.js"></script>
<script src="assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table-students').DataTable();
        $('#table-mentors').DataTable();
        $('#table-exam-results').DataTable();
        $('#table-placement-results').DataTable();

        // Show/hide courses field based on role
        function toggleCoursesField(role) {
            if (role === 'Student') {
                $('#courses-field').show();
            } else {
                $('#courses-field').hide();
            }
        }

        // Handle edit button click
        $('.edit-user-btn').on('click', function() {
            const button = $(this);
            const id = button.data('id');
            const name = button.data('name');
            const email = button.data('email');
            const role = button.data('role');
            const status = button.data('status');
            const courses = button.data('courses') || '';
            const lastOnline = button.data('last-online') || '';

            const modal = $('#editUserModal');
            modal.find('#edit-user-id').val(id);
            modal.find('#edit-name').val(name);
            modal.find('#edit-email').val(email);
            modal.find('#edit-role').val(role);
            modal.find('#edit-status').val(status);
            modal.find('#edit-courses').val(courses);
            modal.find('#edit-last-online').val(lastOnline);
            modal.find('#edit-password').val('');

            // Toggle courses field visibility
            toggleCoursesField(role);

            // Reset password visibility icon
            $('#toggle-password i').removeClass('bi-eye-slash-fill').addClass('bi-eye-fill');
            $('#edit-password').attr('type', 'password');
        });

        // Handle role change
        $('#edit-role').on('change', function() {
            toggleCoursesField($(this).val());
        });

        // Handle form submission
        $('#editUserForm').on('submit', function(e) {
            e.preventDefault();
            const formData = $(this).serializeArray();
            console.log('Updating user with data:', formData);

            alert('User data saved! (Check console for details)');
            $('#editUserModal').modal('hide');
        });

        // Handle password visibility toggle
        $('#toggle-password').on('click', function() {
            const passwordInput = $('#edit-password');
            const icon = $(this).find('i');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
                icon.removeClass('bi-eye-fill').addClass('bi-eye-slash-fill');
            } else {
                passwordInput.attr('type', 'password');
                icon.removeClass('bi-eye-slash-fill').addClass('bi-eye-fill');
            }
        });

        // Handle PDF view button click
        $('.view-pdf-btn').on('click', function() {
            const pdfSrc = $(this).data('pdf-src');
            $('#pdf-iframe').attr('src', pdfSrc);
        });

        // Clear iframe src when modal is closed
        $('#pdfViewerModal').on('hidden.bs.modal', function () {
            $('#pdf-iframe').attr('src', '');
        });
    });
</script>

</body>

</html>
