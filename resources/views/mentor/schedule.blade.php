<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Schedule - Kampong Inggris Pare</title>



    <link rel="shortcut icon" href="{{ asset("templates/backend/")  }}/assets/compiled/svg/fav.jpg" type="image">

  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app-dark.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/extensions/choices.js/public/assets/styles/choices.css">
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
                    <span>Progress Report</span>
                </a>

            </li>

            <li
                class="sidebar-item active ">
                <a href="/edit-schedule" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Schedule</span>
                </a>


            </li>
            <li
                class="sidebar-item ">
                <a href="i/edit-task" class='sidebar-link'>
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
                <a href="/profile-mentor" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    <span>Update Profile</span>
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
                <h3>Input Schedule</h3>
                <p class="text-subtitle text-muted">Create and manage mentor schedules.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-mentor.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input Schedule</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create New Schedule</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="student-select">Student</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="choices form-select" id="student-select">
                                                <option value="">Select Student</option>
                                                <option value="fulan1">Fulan 1</option>
                                                <option value="fulan2">Fulan 2</option>
                                                <option value="fulan3">Fulan 3</option>
                                                <option value="fulan4">Fulan 4</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="mentor-select">Mentor</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="choices form-select" id="mentor-select">
                                                <option value="">Select Mentor</option>
                                                <option value="atar">ATAR</option>
                                                <option value="ryan">RYAN</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="lesson-select">Lesson</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" id="lesson-select">
                                                <option value="">Select Lesson</option>
                                                <option value="speaking">Speaking</option>
                                                <option value="reading">Reading</option>
                                                <option value="ielts">IELTS</option>
                                                <option value="toeic">TOEIC</option>
                                                <option value="toefl">TOEFL</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="schedule-date">Date</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="schedule-date" class="form-control" name="schedule-date">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="schedule-time">Time</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="time" id="schedule-time" class="form-control" name="schedule-time">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="location-select">Location</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" id="location-select">
                                                <option value="online">Online</option>
                                                <option value="offline">Offline</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="action-link">Action (Meeting Link)</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="url" id="action-link" class="form-control" name="action-link" placeholder="https://zoom.us/j/...">
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->
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

</body>

</html>
