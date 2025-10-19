<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Dashboard - Kampong Inggris Pare</title>



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
                <a href="/dashboard-mentor"><img src="{{ asset("templates/backend/")  }}/assets/compiled/png/logo.png" alt="Logo" style="height: 60px; width: auto;" srcset=""></a>
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
                    <span>Schedule</span>
                </a>


            </li>

            <li
                class="sidebar-item ">
                <a href="input-task.html" class='sidebar-link'>
                    <i class="bi bi-journal-check"></i>
                    <span>Input Task</span>
                </a>
            </li>

            <li
                class="sidebar-item  ">
                <a href="/edit-task" class='sidebar-link'>
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
                <a href="/login " class='sidebar-link'>
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
    <h3>Welcome, Mentor Fadlan!</h3>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-8">
            <div class="row">
                <!-- Stat Cards -->
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">My Students</h6>
                                    <h6 class="font-extrabold mb-0">55</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="bi bi-stack"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Active Classes</h6>
                                    <h6 class="font-extrabold mb-0">4</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="bi bi-person-check-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Attendance Rate</h6>
                                    <h6 class="font-extrabold mb-0">97.5%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="bi bi-journal-check"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Assignments Pending</h6>
                                    <h6 class="font-extrabold mb-0">8</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Student Performance Chart -->
            <div class="card">
                <div class="card-header">
                    <h4>Student Performance (Average Score by Class)</h4>
                </div>
                <div class="card-body">
                    <div id="chart-student-performance"></div>
                </div>
            </div>
            <!-- Upcoming Sessions -->
            <div class="card">
                <div class="card-header">
                    <h4>Upcoming Sessions</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">Advanced Speaking</td>
                                    <td>Oct 9, 2025</td>
                                    <td class="text-bold-500">10:00 - 11:30 AM</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Grammar Workshop</td>
                                    <td>Oct 11, 2025</td>
                                    <td class="text-bold-500">02:00 - 03:30 PM</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">TOEFL Prep</td>
                                    <td>Oct 12, 2025</td>
                                    <td class="text-bold-500">09:00 - 10:30 AM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <!-- Mentor Profile -->
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="{{ asset("templates/backend/")  }}/assets/compiled/jpg/1.jpg" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">Fadlan</h5>
                            <h6 class="text-muted mb-0">@fadlanmentor</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Student Progress -->
            <div class="card">
                <div class="card-header">
                    <h4>Student Progress (Avg. Completion)</h4>
                </div>
                <div class="card-body">
                    <div id="chart-student-progress"></div>
                </div>
            </div>
            <!-- Rating & Reviews -->
            <div class="card">
                <div class="card-header">
                    <h4>Rating & Reviews</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center">
                        <h4 class="font-extrabold mb-0 me-2">4.8</h4>
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                    </div>
                    <p class="text-center text-muted mt-1">Based on 120 reviews</p>
                </div>
            </div>
            <!-- Teaching Hours -->
            <div class="card">
                <div class="card-header">
                    <h4>Teaching Hours (This Month)</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon blue me-3"><i class="bi bi-clock-history"></i></div>
                        <div>
                            <h6 class="mb-0">Total Hours</h6>
                            <h5 class="font-extrabold mb-0">42 Hours</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Student Activities -->
            <div class="card">
                <div class="card-header">
                    <h4>Recent Student Activities</h4>
                </div>
                <div class="card-content pb-4">
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="{{ asset("templates/backend/")  }}/assets/compiled/jpg/5.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Hank Schrader</h5>
                            <h6 class="text-muted mb-0">Submitted 'Essay: My Future Goals'</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="{{ asset("templates/backend/")  }}/assets/compiled/jpg/2.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Jane Doe</h5>
                            <h6 class="text-muted mb-0">Completed 'Lesson 5: Tenses'</h6>
                        </div>
                    </div>
                    <div class="px-4">
                        <a href='#' class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>View All Activities</a>
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
    <script src="{{ asset("templates/backend/")  }}/assets/static/js/components/dark.js"></script>
    <script src="{{ asset("templates/backend/")  }}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="{{ asset("templates/backend/")  }}/assets/compiled/js/app.js"></script>



<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Student Performance Chart
    var optionsStudentPerformance = {
        series: [{
            name: 'Avg. Score',
            data: [85, 92, 78, 88]
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
                columnWidth: '50%',
                distributed: true,
            },
        },
        dataLabels: {
            enabled: false
        },
        xaxis: {
            categories: ['Adv. Speaking', 'Grammar', 'TOEFL Prep', 'IELTS Sim'],
        },
        yaxis: {
            title: {
                text: 'Average Score (%)'
            }
        },
        legend: {
            show: false
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val + "%"
                }
            }
        }
    };
    var chartStudentPerformance = new ApexCharts(document.querySelector("#chart-student-performance"), optionsStudentPerformance);
    chartStudentPerformance.render();

    // Student Progress (Avg. Completion) Chart
    var optionsStudentProgress = {
        series: [82],
        chart: {
            height: 350,
            type: 'radialBar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '70%',
                },
                dataLabels: {
                    name: {
                        show: false,
                    },
                    value: {
                        fontSize: '30px',
                        offsetY: 10,
                        formatter: function (val) {
                            return val + '%'
                        }
                    }
                }
            },
        },
        stroke: {
            lineCap: 'round'
        },
        labels: ['Completion Rate'],
    };
    var chartStudentProgress = new ApexCharts(document.querySelector("#chart-student-progress"), optionsStudentProgress);
    chartStudentProgress.render();
});
</script>

</body>

</html>
