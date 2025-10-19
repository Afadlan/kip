<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam: TOEFL Prediction Test - Kampong Inggris Pare</title>


    <link rel="shortcut icon" href="{{ asset("templates/backend/")  }}/assets/compiled/svg/fav.jpg" type="image">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app-dark.css">
  <style>
    body {
        background-color: #f2f7ff;
    }
    #exam-start-screen, #exam-finish-screen {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    #exam-main-screen {
        display: none;
    }
    .exam-header {
        position: sticky;
        top: 0;
        background: #fff;
        padding: 1rem 2rem;
        border-bottom: 1px solid #ddd;
        z-index: 1000;
    }
    .question-navigation {
        max-height: 75vh;
        overflow-y: auto;
    }
    .question-nav-item {
        width: 40px;
        height: 40px;
        cursor: pointer;
    }
    .question-nav-item.answered {
        background-color: #435ebe !important;
        color: white !important;
        border-color: #435ebe !important;
    }
    .question-nav-item.current {
        background-color: #c3e8ff !important;
        border-color: #0d6efd !important;
    }
  </style>
</head>

<body>
    <div id="app">
        <!-- Start Screen -->
        <div id="exam-start-screen">
            <div class="card text-center" style="width: 500px;">
                <div class="card-header">
                    <h4 class="card-title">TOEFL Prediction Test Vol. 3</h4>
                </div>
                <div class="card-body">
                    <h5>Instructions</h5>
                    <p>Read the instructions carefully before you begin.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total Questions:</span>
                            <strong>50 Questions</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Duration:</span>
                            <strong>60 Minutes</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Category:</span>
                            <strong>TOEFL Prediction</strong>
                        </li>
                    </ul>
                    <p class="mt-3">Once you start, you cannot leave the page until the exam is finished. The timer will begin immediately.</p>
                    <button class="btn btn-primary btn-lg" id="start-exam-btn">Start Exam</button>
                </div>
            </div>
        </div>

        <!-- Main Exam Screen -->
        <div id="exam-main-screen">
            <div class="exam-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">TOEFL Prediction Test</h5>
                <div class="d-flex align-items-center">
                    <i class="bi bi-clock-fill me-2"></i>
                    <h5 class="mb-0" id="timer">60:00</h5>
                </div>
            </div>
            <div class="container-fluid mt-4">
                <div class="row">
                    <!-- Question Content -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 id="question-title">Question 1 of 50</h5>
                            </div>
                            <div class="card-body" id="question-body">
                                <!-- Question will be loaded here -->
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <button class="btn btn-secondary" id="prev-btn" disabled>Previous</button>
                                <button class="btn btn-primary" id="next-btn">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- Question Navigation -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Question Navigation</h5>
                            </div>
                            <div class="card-body question-navigation">
                                <div class="d-flex flex-wrap gap-2" id="question-nav-container">
                                    <!-- Navigation items will be generated here -->
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-danger w-100" id="finish-exam-btn">Finish Exam</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Finish Screen -->
        <div id="exam-finish-screen" style="display: none;">
            <div class="card text-center" style="width: 500px;">
                <div class="card-body">
                    <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                    <h4 class="mt-3">Exam Finished!</h4>
                    <p>Your answers have been submitted successfully. You can now safely close this page.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/extensions/jquery/jquery.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    <script>
        $(document).ready(function() {
            const totalQuestions = 50;
            const examDurationMinutes = 60;
            let currentQuestionIndex = 0;
            let answers = new Array(totalQuestions).fill(null);
            let timerInterval;

            // --- MOCK QUESTIONS ---
            const questions = Array.from({ length: totalQuestions }, (_, i) => ({
                title: `Question ${i + 1}`,
                text: `This is the text for question number ${i + 1}. What is the correct option?`,
                options: ["Option A", "Option B", "Option C", "Option D"]
            }));

            // --- LOCKDOWN FUNCTIONS ---
            function enterFullScreen(element) {
                if (element.requestFullscreen) {
                    element.requestFullscreen();
                } else if (element.webkitRequestFullscreen) { // Safari
                    element.webkitRequestFullscreen();
                } else if (element.msRequestFullscreen) { // IE11
                    element.msRequestFullscreen();
                }
            }

            function lockScreen() {
                enterFullScreen(document.documentElement);
                $(window).on('beforeunload', function() {
                    return 'Are you sure you want to leave? Your progress will be lost.';
                });
                $(document).on('contextmenu', function(e) { e.preventDefault(); });
                $(document).on('copy cut paste', function(e) { e.preventDefault(); });
            }

            function unlockScreen() {
                $(window).off('beforeunload');
                $(document).off('contextmenu copy cut paste');
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }

            // --- TIMER FUNCTIONS ---
            function startTimer() {
                let time = examDurationMinutes * 60;
                timerInterval = setInterval(() => {
                    time--;
                    let minutes = Math.floor(time / 60);
                    let seconds = time % 60;
                    $('#timer').text(`${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`);
                    if (time <= 0) {
                        finishExam(true); // Auto-submit
                    }
                }, 1000);
            }

            // --- EXAM LOGIC ---
            function loadQuestion(index) {
                const question = questions[index];
                $('#question-title').text(`Question ${index + 1} of ${totalQuestions}`);

                let optionsHtml = question.options.map((opt, i) => `
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question-options" id="option${i}" value="${i}" ${answers[index] == i ? 'checked' : ''}>
                        <label class="form-check-label" for="option${i}">${opt}</label>
                    </div>
                `).join('');

                $('#question-body').html(`<p>${question.text}</p>${optionsHtml}`);

                // Update buttons
                $('#prev-btn').prop('disabled', index === 0);
                $('#next-btn').prop('disabled', index === totalQuestions - 1);

                // Update navigation UI
                $('.question-nav-item').removeClass('current');
                $(`.question-nav-item[data-index=${index}]`).addClass('current');
            }

             // Blokir tombol ESC dan F11
        document.addEventListener('keydown', function(e) {
            // Blokir ESC (key code 27)
            if (e.key === 'Escape' || e.keyCode === 27) {
                e.preventDefault();
                e.stopPropagation();
                showAlert();
                return false;
            }

            // Blokir F11 (key code 122)
            if (e.key === 'F11' || e.keyCode === 122) {
                e.preventDefault();
                e.stopPropagation();
                showAlert();
                return false;
            }
        }, true);

            function generateNavigation() {
                const container = $('#question-nav-container');
                for (let i = 0; i < totalQuestions; i++) {
                    container.append(`<button class="btn btn-outline-secondary question-nav-item" data-index="${i}">${i + 1}</button>`);
                }
            }

            function finishExam(isAutoSubmit = false) {
                const unanswered = answers.filter(a => a === null).length;
                if (!isAutoSubmit) {
                    if (unanswered > 0) {
                        if (!confirm(`You have ${unanswered} unanswered questions. Are you sure you want to finish?`)) {
                            return;
                        }
                    } else {
                        if (!confirm('Are you sure you want to finish and submit your answers?')) {
                            return;
                        }
                    }
                }

                clearInterval(timerInterval);
                unlockScreen();
                $('#exam-main-screen').hide();
                $('#exam-finish-screen').show();
            }

            // --- EVENT LISTENERS ---
            $('#start-exam-btn').on('click', function() {
                if (confirm('Are you sure you want to begin? The timer will start and you cannot leave this page.')) {
                    $('#exam-start-screen').hide();
                    $('#exam-main-screen').show();
                    lockScreen();
                    startTimer();
                    generateNavigation();
                    loadQuestion(0);
                }
            });

            $('#next-btn').on('click', function() {
                if (currentQuestionIndex < totalQuestions - 1) {
                    currentQuestionIndex++;
                    loadQuestion(currentQuestionIndex);
                }
            });

            $('#prev-btn').on('click', function() {
                if (currentQuestionIndex > 0) {
                    currentQuestionIndex--;
                    loadQuestion(currentQuestionIndex);
                }
            });

            $('#question-nav-container').on('click', '.question-nav-item', function() {
                currentQuestionIndex = parseInt($(this).data('index'));
                loadQuestion(currentQuestionIndex);
            });

            $('#question-body').on('change', 'input[name="question-options"]', function() {
                answers[currentQuestionIndex] = $(this).val();
                $(`.question-nav-item[data-index=${currentQuestionIndex}]`).addClass('answered');
            });

            $('#finish-exam-btn').on('click', () => finishExam(false));
        });
    </script>
</body>

</html>
