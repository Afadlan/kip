<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kampong Inggris Pare</title>



<link rel="shortcut icon" href="{{ asset("templates/backend/")  }}/assets/compiled/svg/fav.jpg" type="image/png">

  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app-dark.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/iconly.css">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
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
                class="sidebar-item active ">
                <a href="/dashboard-admin" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Overview</span>
                </a>


            </li>

            <li
                class="sidebar-item ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-plus-fill"></i>
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
                    <i class="bi bi-journal-plus"></i>
                    <span>Add Exam</span>
                </a>


            </li>
            <li
                class="sidebar-item  ">
                <a href="/data-admin" class='sidebar-link'>
                    <i class="bi bi-database-fill"></i>
                    <span>Data Accounts</span>
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
    <h3>Admin Dashboard</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
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
                                    <h6 class="text-muted font-semibold">Total Students</h6>
                                    <h6 class="font-extrabold mb-0">1,250</h6>
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
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Mentors</h6>
                                    <h6 class="font-extrabold mb-0">25</h6>
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
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Active Courses</h6>
                                    <h6 class="font-extrabold mb-0">12</h6>
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
                                        <i class="iconly-boldGraph"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Completion Rate</h6>
                                    <h6 class="font-extrabold mb-0">82.5%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-8">
                    <!-- Enrollment Trends Chart -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Enrollment Trends</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-enrollment-trends"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <!-- Student Progress Distribution Chart -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Student Level Distribution</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-student-distribution"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-6">
                    <!-- Course Performance Table -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Course Performance (Top 5)</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Course Name</th>
                                            <th>Enrolled</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold-500">Intensive English Program</td>
                                            <td class="text-bold-500">350</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">TOEFL Preparation</td>
                                            <td class="text-bold-500">275</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Speaking Practice</td>
                                            <td class="text-bold-500">180</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Grammar Essentials</td>
                                            <td class="text-bold-500">150</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">IELTS Simulation</td>
                                            <td class="text-bold-500">120</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <!-- Mentor Workload Table -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Mentor Workload</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Mentor</th>
                                            <th>Students</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="d-flex align-items-center"><div class="avatar avatar-md"><img src="{{ asset("templates/backend/")  }}/assets/compiled/jpg/4.jpg"></div><p class="font-bold ms-3 mb-0">ATAR</p></div></td>
                                            <td class="text-bold-500">50</td>
                                        </tr>
                                        <tr>
                                            <td><div class="d-flex align-items-center"><div class="avatar avatar-md"><img src="{{ asset("templates/backend/")  }}/assets/compiled/jpg/3.jpg"></div><p class="font-bold ms-3 mb-0">RYAN</p></div></td>
                                            <td class="text-bold-500">45</td>
                                        </tr>
                                        <tr>
                                            <td><div class="d-flex align-items-center"><div class="avatar avatar-md"><img src="{{ asset("templates/backend/")  }}/assets/compiled/jpg/5.jpg"></div><p class="font-bold ms-3 mb-0">Rafa</p></div></td>
                                            <td class="text-bold-500">55</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Recent Activities -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Recent Activities</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div><i class="bi bi-person-plus-fill me-2 text-success"></i> New student 'John Duck' registered.</div>
                                    <small class="text-muted">10 mins ago</small>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div><i class="bi bi-check-circle-fill me-2 text-primary"></i> 'Jane Doe' completed the 'Grammar Essentials' course.</div>
                                    <small class="text-muted">1 hour ago</small>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div><i class="bi bi-journal-plus me-2 text-info"></i> New exam 'TOEFL Prediction Vol. 2' was added.</div>
                                    <small class="text-muted">3 hours ago</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <!-- System Health -->
                    <div class="card">
                        <div class="card-header">
                            <h4>System Health</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="stats-icon green me-3"><i class="bi bi-hdd-stack-fill"></i></div>
                                <div>
                                    <h6 class="mb-0">Server Status</h6>
                                    <span class="text-success font-bold">Online</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="stats-icon blue me-3"><i class="bi bi-database-fill-check"></i></div>
                                <div>
                                    <h6 class="mb-0">Database Performance</h6>
                                    <span class="text-success font-bold">Optimal</span>
                                </div>
                            </div>
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
    <script src="{{ asset("templates/backend/")  }}/assets/static/js/components/dark.js"></script>
    <script src="{{ asset("templates/backend/")  }}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="{{ asset("templates/backend/")  }}/assets/compiled/js/app.js"></script>



<!-- Need: Apexcharts -->
<script src="{{ asset("templates/backend/")  }}/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Enrollment Trends Chart
    var optionsEnrollment = {
        series: [{
            name: 'New Students',
            data: [31, 40, 28, 51, 42, 109, 100]
        }],
        chart: {
            height: 350,
            type: 'line',
            toolbar: {
                show: false
            },
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: ["2025-09-19T00:00:00.000Z", "2025-09-20T00:00:00.000Z", "2025-09-21T00:00:00.000Z", "2025-09-22T00:00:00.000Z", "2025-09-23T00:00:00.000Z", "2025-09-24T00:00:00.000Z", "2025-09-25T00:00:00.000Z"]
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy'
            },
        },
    };
    var chartEnrollment = new ApexCharts(document.querySelector("#chart-enrollment-trends"), optionsEnrollment);
    chartEnrollment.render();

    // Student Distribution Chart
    var optionsDistribution = {
        series: [440, 550, 260],
        chart: {
            type: 'donut',
            height: 350
        },
        labels: ['Beginner', 'Intermediate', 'Advanced'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };
    var chartDistribution = new ApexCharts(document.querySelector("#chart-student-distribution"), optionsDistribution);
    chartDistribution.render();
});
</script>

</body>

</html>
