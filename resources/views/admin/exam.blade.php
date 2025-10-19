<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Builder - Kampong Inggris Pare</title>



<link rel="shortcut icon" href="{{ asset("templates/backend/")  }}/assets/compiled/svg/fav.jpg" type="image">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/compiled/css/app-dark.css">
  <link rel="stylesheet" href="{{ asset("templates/backend/")  }}/assets/extensions/choices.js/public/assets/styles/choices.css">
</head>

<body>
    <script src="stylesheet" href="{{ asset("templates/backend/")  }}/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="/dashboard-admin"><img src="{{ asset("templates/backend/")  }}/assets/compiled/png/logo.png" alt="Logo" style="height: 60px; width: auto;" srcset=""></a>
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
                class="sidebar-item active ">
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
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Exam Builder</h3>
                <p class="text-subtitle text-muted">Create and manage exams or quizzes.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-admin.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Exam Builder</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Exam Details</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exam-title">Exam / Quiz Title</label>
                            <input type="text" class="form-control" id="exam-title" placeholder="e.g., TOEFL Prediction Test Vol. 3">
                        </div>
                        <div class="form-group">
                            <label for="exam-category">Question Category</label>
                            <select class="form-select" id="exam-category">
                                <option>TOEFL Prediction</option>
                                <option>IELTS Simulation</option>
                                <option>Grammar Focus</option>
                                <option>Speaking Practice</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="existing-exam">Select Existing</label>
                            <select class="form-select" id="existing-exam">
                                <option value="">Start a new exam</option>
                                <option>TOEFL Prediction Test Vol. 1 (Draft)</option>
                                <option>TOEFL Prediction Test Vol. 2 (Published)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exam-duration">Duration (minutes)</label>
                            <input type="number" class="form-control" id="exam-duration" placeholder="e.g., 120">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Question Builder</h4>
                        <div class="d-flex justify-content-end">
                            <label for="import-file" class="btn btn-sm btn-outline-primary icon icon-left">
                                <i class="bi bi-upload"></i> Import from File
                            </label>
                            <input type="file" id="import-file" class="d-none">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="question-type">Question Type</label>
                                    <select class="form-select" id="question-type">
                                        <option value="multiple-choice">Multiple Choice</option>
                                        <option value="true-false">True/False</option>
                                        <option value="fill-blank">Fill in the Blank</option>
                                        <option value="essay">Essay / Long Answer</option>
                                        <option value="matching">Matching</option>
                                        <option value="listening">Listening Comprehension</option>
                                        <option value="ordering">Ordering / Sequence</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="question-points">Question Weight / Points</label>
                                    <input type="number" class="form-control" id="question-points" value="10">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- Dynamic Question Forms Container -->
                        <div id="question-forms-container">
                            <!-- Multiple Choice Form -->
                            <div id="form-multiple-choice" class="question-form">
                                <div class="form-group">
                                    <label>Question</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <label>Options</label>
                                <div class="input-group mb-2" v-for="i in 4">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="radio" name="correct-answer">
                                    </div>
                                    <input type="text" class="form-control" :placeholder="'Option ' + i">
                                </div>
                            </div>
                            <!-- True/False Form -->
                            <div id="form-true-false" class="question-form" style="display: none;">
                                <div class="form-group">
                                    <label>Statement</label>
                                    <textarea class="form-control" rows="2"></textarea>
                                </div>
                                <label>Correct Answer</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="true-false-answer" id="true-answer">
                                    <label class="form-check-label" for="true-answer">True</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="true-false-answer" id="false-answer">
                                    <label class="form-check-label" for="false-answer">False</label>
                                </div>
                            </div>
                            <!-- Fill in the Blank Form -->
                            <div id="form-fill-blank" class="question-form" style="display: none;">
                                <div class="form-group">
                                    <label>Sentence</label>
                                    <textarea class="form-control" rows="2" placeholder="Use ___ for the blank. e.g., The quick brown fox ___ over the lazy dog."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Correct Answer</label>
                                    <input type="text" class="form-control" placeholder="jumps">
                                </div>
                            </div>
                            <!-- Essay Form -->
                            <div id="form-essay" class="question-form" style="display: none;">
                                <div class="form-group">
                                    <label>Question / Prompt</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <!-- Matching Form -->
                            <div id="form-matching" class="question-form" style="display: none;">
                                <label>Matching Pairs</label>
                                <div class="row mb-2" v-for="i in 4">
                                    <div class="col-6"><input type="text" class="form-control" :placeholder="'Item ' + i"></div>
                                    <div class="col-6"><input type="text" class="form-control" :placeholder="'Match ' + i"></div>
                                </div>
                            </div>
                            <!-- Listening Form -->
                            <div id="form-listening" class="question-form" style="display: none;">
                                <div class="form-group">
                                    <label for="audio-file">Upload Audio File</label>
                                    <input type="file" class="form-control" id="audio-file" accept="audio/*">
                                </div>
                                <div class="form-group">
                                    <label>Question related to audio</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <!-- You can nest another question type here, e.g., multiple choice for the listening question -->
                            </div>
                            <!-- Ordering Form -->
                            <div id="form-ordering" class="question-form" style="display: none;">
                                <label>Items to Order (in correct sequence)</label>
                                <div class="input-group mb-2" v-for="i in 4">
                                    <span class="input-group-text"></span>
                                    <input type="text" class="form-control" :placeholder="'Step ' + i">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" id="add-question-btn">Add Question to List</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Question List</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted" id="question-list-summary">Total Questions: 0 | Total Points: 0</p>
                        <ul class="list-group" id="question-list-container">
                            <!-- Questions will be added here dynamically -->
                        </ul>
                        <hr>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-secondary" id="preview-exam-btn" data-bs-toggle="modal" data-bs-target="#previewExamModal">Preview Exam</button>
                            <button class="btn btn-info" id="save-draft-btn">Save as Draft</button>
                            <button class="btn btn-success" id="save-add-another-btn">Save & Add Another</button>
                            <button class="btn btn-primary" id="save-back-btn">Save & Back to List</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Preview Exam Modal -->
<div class="modal fade" id="previewExamModal" tabindex="-1" aria-labelledby="previewExamModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewExamModalLabel">Exam Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="exam-preview-content">
                <!-- Exam preview will be generated here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
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

    <script src="assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="assets/static/js/pages/form-element-select.js"></script>
    <script src="assets/extensions/jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // --- DYNAMIC QUESTION FORM ---
            $('#question-type').on('change', function() {
                $('.question-form').hide();
                $('#form-' + $(this).val()).show();
            }).trigger('change');

            // --- QUESTION MANAGEMENT ---
            let questions = [];

            function updateQuestionList() {
                const container = $('#question-list-container');
                container.empty();
                let totalPoints = 0;

                questions.forEach((q, index) => {
                    const badgeMap = {
                        'multiple-choice': { class: 'bg-primary', text: 'MC' },
                        'true-false': { class: 'bg-info', text: 'T/F' },
                        'fill-blank': { class: 'bg-secondary', text: 'Fill' },
                        'essay': { class: 'bg-dark', text: 'Essay' },
                        'matching': { class: 'bg-warning', text: 'Match' },
                        'listening': { class: 'bg-success', text: 'Listen' },
                        'ordering': { class: 'bg-danger', text: 'Order' },
                    };
                    const badge = badgeMap[q.type];
                    const questionText = q.question.length > 25 ? q.question.substring(0, 25) + '...' : q.question;

                    const li = `
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge ${badge.class} me-2">${badge.text}</span>
                                <span>${questionText}</span>
                            </div>
                            <i class="bi bi-trash-fill text-danger delete-question-btn" style="cursor: pointer;" data-index="${index}"></i>
                        </li>`;
                    container.append(li);
                    totalPoints += parseInt(q.points);
                });

                $('#question-list-summary').text(`Total Questions: ${questions.length} | Total Points: ${totalPoints}`);
            }

            $('#add-question-btn').on('click', function() {
                const type = $('#question-type').val();
                const points = $('#question-points').val() || 0;
                const form = $('#form-' + type);
                const questionText = form.find('textarea').first().val();

                if (!questionText) {
                    alert('Question text cannot be empty!');
                    return;
                }

                let questionData = { type: type, question: questionText, points: points };
                // Add more specific data based on type if needed

                questions.push(questionData);
                updateQuestionList();

                // Clear form
                form.find('input[type="text"], textarea').val('');
                form.find('input[type="radio"], input[type="checkbox"]').prop('checked', false);
            });

            $('#question-list-container').on('click', '.delete-question-btn', function() {
                const index = $(this).data('index');
                questions.splice(index, 1);
                updateQuestionList();
            });

            // --- BULK UPLOAD ---
            $('#import-file').on('change', function(e) {
                const file = e.target.files[0];
                if (!file) return;

                const reader = new FileReader();
                reader.onload = function(event) {
                    const csv = event.target.result;
                    /*
                     * CSV Format Example:
                     * type,question,points
                     * multiple-choice,"What is 2+2?",10
                     * true-false,"The sky is blue.",5
                     * essay,"Explain photosynthesis.",20
                    */
                    try {
                        const lines = csv.split('\n').slice(1); // Skip header
                        lines.forEach(line => {
                            if (line.trim() === '') return;
                            const parts = line.match(/(".*?"|[^",]+)(?=\s*,|\s*$)/g); // Handle quoted strings
                            const question = {
                                type: (parts[0] || '').replace(/"/g, '').trim(),
                                question: (parts[1] || '').replace(/"/g, '').trim(),
                                points: parseInt((parts[2] || '0').trim())
                            };
                            if(question.type && question.question) {
                                questions.push(question);
                            }
                        });
                        updateQuestionList();
                        alert(`${lines.length} questions imported successfully!`);
                    } catch (error) {
                        alert('Failed to parse CSV file. Please check the format.');
                        console.error(error);
                    }
                };
                reader.readAsText(file);
                $(this).val(''); // Reset file input
            });

            // --- ACTION BUTTONS ---
            $('#preview-exam-btn').on('click', function() {
                const previewContainer = $('#exam-preview-content');
                previewContainer.empty();
                if (questions.length === 0) {
                    previewContainer.html('<p class="text-center">No questions added yet.</p>');
                    return;
                }
                questions.forEach((q, index) => {
                    const questionHtml = `
                        <div class="mb-4">
                            <h6>Q${index + 1}: (${q.points} Pts) ${q.question}</h6>
                            <p class="text-muted">Type: ${q.type}</p>
                            <div class="border p-3"><i>Answer area for ${q.type} would be here.</i></div>
                        </div>
                    `;
                    previewContainer.append(questionHtml);
                });
            });

            $('#save-draft-btn').on('click', function() { alert('Exam saved as draft!'); });
            $('#save-add-another-btn').on('click', function() { alert('Exam saved! You can now create another exam.'); });
            $('#save-back-btn').on('click', function() { alert('Exam saved! Redirecting to exam list...'); });
        });
    </script>

</body>

</html>
