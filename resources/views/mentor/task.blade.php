<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Task - Kampong Inggris Pare</title>



    <link rel="shortcut icon" href="{{ asset("templates/backend/")  }}/assets/compiled/svg/fav.jpg" type="image">

  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app-dark.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/extensions/choices.js/public/assets/styles/choices.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/table-datatable-jquery.css">
</head>

<body>
    <script src="{{ asset("templates/backend/")  }}/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="/dashboard-mentor"><img src="{{ asset("templates/backend/")  }}/assets/compiled/png/logo.png" alt="Logo" style="height: 60px; width: auto;" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
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
                <a href="/dashboard-mentor" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Overview</span>
                </a>


            </li>

            <li
                class="sidebar-item ">
                <a href="/edit-progress" class='sidebar-link'>
                    <i class="bi bi-graph-up"></i>
                    <span>Input Progress</span>
                </a>

            </li>

            <li
                class="sidebar-item ">
                <a href="/edit-schedule" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Input Schedule</span>
                </a>


            </li>

            <li
                class="sidebar-item active">
                <a href="/edit-task" class='sidebar-link'>
                    <i class="bi bi-journal-check"></i>
                    <span>Input Task</span>
                </a>
            </li>

            <li
                class="sidebar-item ">
                <a href="/input-material" class='sidebar-link'>
                    <i class="bi bi-book-fill"></i>
                    <span>Material</span>
                </a>


            </li>
            <li
                class="sidebar-item ">
                <a href="/login" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    <span>Update Profile</span>
                </a>


            </li>

            <li
                class="sidebar-item ">
                <a href="auth-login.html" class='sidebar-link'>
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
                <h3>Input Task</h3>
                <p class="text-subtitle text-muted">Assign and review student tasks.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-mentor.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input Task</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Assign Task Form section start -->
    <section id="assign-task-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Assign New Task</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="student-select">Assign to Student(s)</label>
                                            <select class="choices form-select multiple-remove" multiple="multiple" id="student-select">
                                                <option value="Fulan 1">Fulan 1</option>
                                                <option value="Fulan 2">Fulan 2</option>
                                                <option value="Fulan 3">Fulan 3</option>
                                                <option value="Fulan 4">Fulan 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="task-title">Task Title</label>
                                            <input type="text" id="task-title" class="form-control" placeholder="e.g., Essay: My Future Goals" name="task-title">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="material-select">Related Material</label>
                                            <select class="form-select" id="material-select">
                                                <option value="">Select Material</option>
                                                <option value="speaking-1">Speaking - Lesson 1</option>
                                                <option value="grammar-3">Grammar - Lesson 3</option>
                                                <option value="toefl-prep">TOEFL Preparation Module</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="level-select">Difficulty Level</label>
                                            <select class="form-select" id="level-select">
                                                <option value="easy">Easy</option>
                                                <option value="medium" selected>Medium</option>
                                                <option value="hard">Hard</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="task-description">Task Description</label>
                                            <textarea class="form-control" id="task-description" rows="4" placeholder="Provide detailed instructions for the task..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="task-deadline">Deadline</label>
                                            <input type="date" id="task-deadline" class="form-control" name="task-deadline">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Assign Task</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Assign Task Form section end -->

    <!-- Task Review Table section start -->
    <section class="section">
        <!-- Recommendation Widget -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Task Overview</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-hourglass-split fs-3 text-warning me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Pending Review</h6>
                                        <p class="fs-5 mb-0 fw-bold">8</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill fs-3 text-success me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Approved</h6>
                                        <p class="fs-5 mb-0 fw-bold">32</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-exclamation-triangle-fill fs-3 text-danger me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Overdue</h6>
                                        <p class="fs-5 mb-0 fw-bold">2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Review Student Submissions</h5>
            </div>
            <div class="card-body">
                <table class="table" id="task-review-table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Task Title</th>
                            <th>Submitted Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fulan 1</td>
                            <td>Essay: My Future Goals</td>
                            <td>2025-10-07</td>
                            <td><span class="badge bg-warning">Pending Review</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary review-btn" data-bs-toggle="modal" data-bs-target="#reviewTaskModal" data-student="Fulan 1" data-task="Essay: My Future Goals" data-submission="This is my essay about my future goals. I want to become a software engineer and work for a big tech company. I believe that learning English is a crucial step towards achieving this goal.">Review</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Fulan 2</td>
                            <td>Speaking Practice Video</td>
                            <td>2025-10-06</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-secondary review-btn" data-bs-toggle="modal" data-bs-target="#reviewTaskModal" data-student="Fulan 2" data-task="Speaking Practice Video" data-submission="https://example.com/path/to/video.mp4" data-feedback="Great fluency and pronunciation!">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Fulan 3</td>
                            <td>Grammar Exercise 4</td>
                            <td>2025-10-05</td>
                            <td><span class="badge bg-danger">Revision Needed</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary review-btn" data-bs-toggle="modal" data-bs-target="#reviewTaskModal" data-student="Fulan 3" data-task="Grammar Exercise 4" data-submission="Here are my answers for the exercise. 1. A, 2. C, 3. B..." data-feedback="Please review the use of past perfect tense in question #3.">Review</a>
                            </td>
                        </tr>
                         <tr>
                            <td>Fulan 4</td>
                            <td>TOEFL Reading Test</td>
                            <td>2025-10-07</td>
                            <td><span class="badge bg-warning">Pending Review</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary review-btn" data-bs-toggle="modal" data-bs-target="#reviewTaskModal" data-student="Fulan 4" data-task="TOEFL Reading Test" data-submission="The main idea of the first passage is about the migration of birds.">Review</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Task Review Table section end -->
</div>

<!-- Review Task Modal -->
<div class="modal fade" id="reviewTaskModal" tabindex="-1" aria-labelledby="reviewTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reviewTaskModalLabel">Review Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="reviewTaskForm">
                    <div class="mb-3">
                        <label class="form-label">Student</label>
                        <input type="text" class="form-control" id="review-student-name" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Task</label>
                        <input type="text" class="form-control" id="review-task-title" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="review-submission-content" class="form-label">Submission Content</label>
                        <textarea class="form-control" id="review-submission-content" rows="6" readonly></textarea>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="review-feedback" class="form-label">Feedback / Correction</label>
                        <textarea class="form-control" id="review-feedback" rows="4" placeholder="Provide your feedback here..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Request Revision</button>
                <button type="button" class="btn btn-success">Approve</button>
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
    <script src="{{ asset("templates/backend/")  }}/assets/static/js/components/dark.js"></script>
    <script src="{{ asset("templates/backend/")  }}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="{{ asset("templates/backend/")  }}/assets/compiled/js/app.js"></script>

    <script src="{{ asset("templates/backend/")  }}/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="{{ asset("templates/backend/")  }}/assets/static/js/pages/form-element-select.js"></script>
    <script src="{{ asset("templates/backend/")  }}/assets/extensions/jquery/jquery.min.js"></script>
    <script src="{{ asset("templates/backend/")  }}/assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset("templates/backend/")  }}/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#task-review-table').DataTable();

            // Handle review button click
            $('.review-btn').on('click', function() {
                const button = $(this);
                const student = button.data('student');
                const task = button.data('task');
                const submission = button.data('submission');
                const feedback = button.data('feedback') || ''; // Use existing feedback or empty string

                const modal = $('#reviewTaskModal');
                modal.find('#reviewTaskModalLabel').text('Review Task: ' + task);
                modal.find('#review-student-name').val(student);
                modal.find('#review-task-title').val(task);
                modal.find('#review-submission-content').val(submission);
                modal.find('#review-feedback').val(feedback);
            });
        });
    </script>

</body>

</html>
