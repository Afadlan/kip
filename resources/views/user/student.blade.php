<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kampong Inggris Pare</title>



    <link rel="shortcut icon" href="{{ asset("templates/backend/")  }}/assets/compiled/svg/fav.jpg" type="image">


  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app-dark.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/iconly.css">
</head>

<body>
    <script src="{{ asset("templates/backend/")  }}/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="/dashboard-student"><img src="{{ asset("templates/backend/")  }}/assets/compiled/png/logo.png" alt="Logo" style="height: 60px; width: auto;" srcset=""></a>
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
                class="sidebar-item active ">
                <a href="/dashboard-student" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Overview</span>
                </a>


            </li>

            <li
                class="sidebar-item ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Placement Test</span>
                </a>

            </li>

            <li
                class="sidebar-item  ">
                <a href="/learning-student" class='sidebar-link'>
                    <i class="bi bi-book-fill"></i>
                    <span>Learning</span>
                </a>


            </li>
            <li
                class="sidebar-item  ">
                <a href="/talk-mentor" class='sidebar-link'>
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>Mentor Talk</span>
                </a>


            </li>

            <li
                class="sidebar-item ">
                <a href="/report-student" class='sidebar-link'>
                    <i class="bi bi-journal-check"></i>
                    <span>Progress Report</span>
                </a>



            </li>


            <li
                class="sidebar-item ">
                <a href="/exam-student" class='sidebar-link'>
                    <i class="bi bi-link"></i>
                    <span>Exam</span>
                </a>


            </li>

            <li
                class="sidebar-item ">
                <a href="/update-profile" class='sidebar-link'>
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
    <div class="d-flex justify-content-between align-items-center">
        <h3>Welcome, John Duck!</h3>
        <!-- Tombol Absensi dan Notifikasi di pojok kanan -->
        <div class="d-flex gap-2 align-items-center">
            <!-- Tombol Absensi -->
            <button class="btn btn-primary position-relative" id="attendanceBtn" data-bs-toggle="modal" data-bs-target="#attendanceModal">
                <i class="bi bi-calendar-check-fill"></i>
                <span class="d-none d-md-inline ms-2">Attendance</span>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success" id="attendanceBadge" style="display: none;">
                    <i class="bi bi-check2" style="font-size: 10px;"></i>
                </span>
            </button>

            <!-- Tombol Notifikasi -->
            <div class="dropdown">
                <button class="btn btn-light position-relative" id="notifDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bell-fill fs-4 text-gray-600"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notifDropdown">
                    <li class="dropdown-header">Notifications</li>
                    <li><a class="dropdown-item" href="#">💬 New feedback from your mentor</a></li>
                    <li><a class="dropdown-item" href="#">📢 Upcoming class reminder</a></li>
                    <li><a class="dropdown-item" href="#">⚠️ Assignment due soon</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-center" href="#">See All</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal Absensi -->
<div class="modal fade" id="attendanceModal" tabindex="-1" aria-labelledby="attendanceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="attendanceModalLabel">
                    <i class="bi bi-calendar-check-fill me-2"></i>Daily Attendance
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="attendanceModalBody">
                <!-- Content will be loaded by JavaScript -->
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-8">
            <!-- My Course Card -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">My Course</h5>
                    <h6>Intensive English Program</h6>
                    <p class="text-muted small">A comprehensive program designed to improve your speaking, listening, reading, and writing skills.</p>
                    <p class="mb-2">You are 75% complete. Keep up the great work!</p>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Quick Stats Cards -->
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Current Level</h6>
                                    <h6 class="font-extrabold mb-0">Level 2</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="bi bi-fire"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Study Streak</h6>
                                    <h6 class="font-extrabold mb-0">12 Days</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Completed Lessons</h6>
                                    <h6 class="font-extrabold mb-0">48</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Time Chart -->
            <div class="card">
                <div class="card-header">
                    <h4>Learning Time (This Week)</h4>
                </div>
                <div class="card-body">
                    <div id="chart-learning-time"></div>
                </div>
            </div>

            <!-- Upcoming Classes & Assignments -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Schedule & Tasks</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="upcoming-tab" data-bs-toggle="tab" href="#upcoming" role="tab" aria-controls="upcoming" aria-selected="true">Upcoming Classes</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="assignments-tab" data-bs-toggle="tab" href="#assignments" role="tab" aria-controls="assignments" aria-selected="false">Assignments Due</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
                            <div class="table-responsive mt-3">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td><i class="bi bi-camera-video-fill text-primary"></i></td>
                                            <td class="text-bold-500">Advanced Speaking</td>
                                            <td>Oct 9, 2025 - 10:00 AM</td>
                                            <td><a href="#" class="btn btn-sm btn-primary">Join</a></td>
                                        </tr>
                                        <tr>
                                            <td><i class="bi bi-camera-video-fill text-primary"></i></td>
                                            <td class="text-bold-500">Grammar Workshop</td>
                                            <td>Oct 11, 2025 - 02:00 PM</td>
                                            <td><a href="#" class="btn btn-sm btn-primary">Join</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="assignments" role="tabpanel" aria-labelledby="assignments-tab">
                            <div class="table-responsive mt-3">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td><i class="bi bi-file-earmark-text-fill text-warning"></i></td>
                                            <td class="text-bold-500">Essay: My Future Goals</td>
                                            <td>Due: Oct 10, 2025</td>
                                            <td><a href="#" class="btn btn-sm btn-warning">Submit</a></td>
                                        </tr>
                                        <tr>
                                            <td><i class="bi bi-file-earmark-text-fill text-danger"></i></td>
                                            <td class="text-bold-500">Presentation Slides</td>
                                            <td>Due: Today</td>
                                            <td><a href="#" class="btn btn-sm btn-danger">Submit</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <!-- Profile Card -->
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="{{ asset("templates/backend/")  }}/assets/compiled/jpg/1.jpg" alt="Face 1">
                            <span class="avatar-status bg-success"></span>
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">John Duck</h5>
                            <h6 class="text-muted mb-0">@johnducky</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overall Progress Chart -->
            <div class="card">
                <div class="card-header">
                    <h4>Overall Progress</h4>
                </div>
                <div class="card-body">
                    <div id="chart-overall-progress"></div>
                </div>
            </div>

            <!-- Quiz Score & Mentor Feedback -->
            <div class="card">
                <div class="card-header">
                    <h4>Quiz Score</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-patch-check-fill text-success" style="font-size: 2.5rem;"></i>
                        <div class="ms-3">
                            <h6 class="text-muted font-semibold">Average Score</h6>
                            <h5 class="font-extrabold mb-0">85.5%</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Mentor Feedback</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar avatar-md me-3">
                            <img src="{{ asset("templates/backend/")  }}/assets/compiled/jpg/5.jpg">
                        </div>
                        <div>
                            <h6 class="font-bold mb-0">Mentor ATAR</h6>
                            <p class="text-muted mb-0">"Great job on the last assignment, John! Your speaking is much more fluent. Keep practicing."</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recommended Course -->
            <div class="card">
                <div class="card-header">
                    <h4>Recommended Course</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-lightbulb-fill text-warning" style="font-size: 2.5rem;"></i>
                        <div class="ms-3">
                            <h6 class="font-bold">IELTS Preparation</h6>
                            <p class="text-muted mb-1">Take your skills to the next level.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <script src="assets/compiled/js/app.js"></script>



<!-- Need: Apexcharts -->
<script src="{{ asset("templates/backend/")  }}/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var optionsLearningTime = {
        series: [{
            name: 'Minutes',
            data: [45, 60, 75, 50, 80, 90, 65]
        }],
        chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        },
        yaxis: {
            title: {
                text: 'Minutes'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val + " minutes"
                }
            }
        }
    };

    var chartLearningTime = new ApexCharts(document.querySelector("#chart-learning-time"), optionsLearningTime);
    chartLearningTime.render();

    var optionsOverallProgress = {
        series: [75],
        chart: {
            height: 350,
            type: 'radialBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 225,
                hollow: {
                    margin: 0,
                    size: '70%',
                    background: '#fff',
                    image: undefined,
                    imageOffsetX: 0,
                    imageOffsetY: 0,
                    position: 'front',
                    dropShadow: {
                        enabled: true,
                        top: 3,
                        left: 0,
                        blur: 4,
                        opacity: 0.24
                    }
                },
                track: {
                    background: '#fff',
                    strokeWidth: '67%',
                    margin: 0,
                    dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                    }
                },
                dataLabels: {
                    show: true,
                    name: {
                        offsetY: -10,
                        show: true,
                        color: '#888',
                        fontSize: '17px'
                    },
                    value: {
                        formatter: function(val) {
                            return parseInt(val);
                        },
                        color: '#111',
                        fontSize: '36px',
                        show: true,
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: 'horizontal',
                shadeIntensity: 0.5,
                gradientToColors: ['#ABE5A1'],
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100]
            }
        },
        stroke: {
            lineCap: 'round'
        },
        labels: ['Percent'],
    };

    var chartOverallProgress = new ApexCharts(document.querySelector("#chart-overall-progress"), optionsOverallProgress);
    chartOverallProgress.render();
});
</script>

</body>

</html>
