<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk With Mentor - Kampong Inggris Pare</title>



    <link rel="shortcut icon" href="{{ asset("templates/backend/")  }}/assets/compiled/svg/fav.jpg" type="image">


  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/ui-widgets-chatbox.css">
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
                class="sidebar-item ">
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
                class="sidebar-item active ">
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
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Chat with mentor</h3>
                <p class="text-subtitle text-muted">Our take on a chat conversation.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Talk With Mentor</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- My Course Info -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">My Course: Intensive English Program</h5>
            <p class="text-muted">A comprehensive program designed to improve your speaking, listening, reading, and writing skills. This learning path is tailored to your current level.</p>
            <div class="d-flex align-items-center">
                <span class="me-3">Your Progress:</span>
                <div class="progress flex-grow-1" style="height: 10px;">
                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="ms-3 fw-bold">75%</span>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Schedule with Mentor</h4>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>DATE</th>
                                        <th>TIME</th>
                                        <th>LESSON</th>
                                        <th>MENTOR</th>
                                        <th>LOCATION</th>
                                        <th class="text-center">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">10 August 2025</td>
                                        <td><span class="badge bg-light-primary">10:00 PM</span></td>
                                        <td class="text-bold-500">Speaking</td>
                                        <td>ATAR</td>
                                        <td><span class="badge bg-light-success">Online</span></td>
                                        <td class="text-center"><a href="#" class="btn btn-primary btn-sm"><i class="bi bi-camera-video"></i> Join</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">10 August 2025</td>
                                        <td><span class="badge bg-light-primary">12:00 AM</span></td>
                                        <td class="text-bold-500">READING</td>
                                        <td>RYAN</td>
                                        <td><span class="badge bg-light-success">Online</span></td>
                                        <td class="text-center"><a href="#" class="btn btn-primary btn-sm"><i class="bi bi-camera-video"></i> Join</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">10 August 2025</td>
                                        <td><span class="badge bg-light-primary">09:00 PM</span></td>
                                        <td class="text-bold-500">IELTS</td>
                                        <td>RYAN</td>
                                        <td><span class="badge bg-light-success">Online</span></td>
                                        <td class="text-center"><a href="#" class="btn btn-primary btn-sm"><i class="bi bi-camera-video"></i> Join</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">10 August 2025</td>
                                        <td><span class="badge bg-light-primary">08:00 AM</span></td>
                                        <td class="text-bold-500">TOEIC</td>
                                        <td>RYAN</td>
                                        <td><span class="badge bg-light-success">Online</span></td>
                                        <td class="text-center"><a href="#" class="btn btn-primary btn-sm"><i class="bi bi-camera-video"></i> Join</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">10 August 2025</td>
                                        <td><span class="badge bg-light-primary">06:00 PM</span></td>
                                        <td class="text-bold-500">TOEFL</td>
                                        <td>ATAR</td>
                                        <td><span class="badge bg-light-success">Online</span></td>
                                        <td class="text-center"><a href="#" class="btn btn-primary btn-sm"><i class="bi bi-camera-video"></i> Join</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <a href="https://wa.me/6281234567890" target="_blank" class="chat-btn">
                <i class="bi bi-whatsapp"></i>
                <span>Talk With Mentor</span>
            </a>
        </div>
    </section>
</div>

<style>
.chat-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background-color: #25D366; /* WhatsApp green color */
  color: white;
  padding: 12px 24px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: bold;
  font-size: 1rem;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  transition: all 0.3s ease;
}
.chat-btn:hover {
  background-color: #1ebc57;
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(0,0,0,0.2);
  color: white;
}
.chat-btn i {
    font-size: 1.2rem;
}
</style>

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



</body>

</html>
