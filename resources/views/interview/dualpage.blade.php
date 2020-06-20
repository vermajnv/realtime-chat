<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docassemble</title>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}">
</head>

<body>
    <div class="container">
        <form action="#" method="post" id="myForm" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}" id="csrf_token">
            <input type="hidden" name="_questionCountPage1" value="1" id="questionCountPage1">
            <input type="hidden" name="_questionCountPage2" value="1" id="questionCountPage2">
            <input type="hidden" name="_page" value="1" id="current_page">
            <div class="tabs">
                <ul>
                    <li class="is-active" id="page1"><a>Page 1</a></li>
                    <li id="page2"><a>Page 2</a></li>
                </ul>
            </div>
            <div id="wrapper1"> 
                <div class="columns">
                    <div class="column">
                        <h1>Page 1</h1>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label">Page title</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="question1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label">Variable Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="question1_1_var">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label">Field Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="question1_1_field">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="checkbox">
                                <input type="checkbox" name="quastion1_1_mendatory" >
                                Mandatory
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="wrapper2"> 
                <div class="columns">
                    <div class="column">
                        <h1>Page 2</h1>
                    </div>
                    <div class="column">
                        <a href="#" id="toggleCondition" onclick="toggleCondition()"><i class="fa fa-forward" aria-hidden="true" title="Add Page Logic"></i>
                        </a>
                    </div>
                </div>
                <div class="columns is-hidden" id="conditionBox">
                    <div class="column">
                        <div class="select">
                            <select>
                                <option>Select dropdown</option>
                                <option>Show If</option>
                            </select>
                        </div>
                    </div>
                    <div class="column">
                        <div class="select">
                            <select class="selectVar" name="mendatory_var">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" placeholder="Value" name="question_condition">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label">Page title 2</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="question2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label">Variable Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="question2_1_var">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label">Field Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="question2_1_field">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="checkbox">
                                <input type="checkbox" name="quastion2_1_mendatory" >
                                Mandatory
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <div class="buttons">
                        <a class="button is-primary" href="#" id="addMore">+ Add Question</a>
                    </div>
                </div>
            </div>

            <div class="buttons">
                <button class="button is-primary" type="submit" id="submitForm">Submit</button>
            </div>
        </form>
    </div>
    <script>
        $('#wrapper2').style.display = "none";
        let form = $('#myForm');
        
        $('#myForm').addEventListener('submit', (form) => {
            form.preventDefault();
            var formData = new FormData(form.target);
            var myInit = { 
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('#csrf_token').value,
                },
                body : formData,
                mode: 'cors',
                cache: 'default',
                redirect: 'follow',
            };
            
            var myRequest = new Request('{{ route('interview.storepage')}}', myInit);
            
            fetch(myRequest).then(function(response) {
                $('#submitForm').innerHTML = 'Please Wait...';
                var contentType = response.headers.get("content-type");
                if(contentType && contentType.includes("application/json")) {
                    return response.json();
                }
                throw new TypeError("Error: JSON not returned from sign-in site");
            }).then((response) => {
                $('#submitForm').innerHTML = 'Submit';
                
            });
        })

        let clicks = 0;
        $('#addMore').addEventListener('click', (event) => {
            event.preventDefault();
            let page = $('#current_page').value;
            let questionCount = $('#questionCountPage' + page).value;
            $('#questionCountPage' + page).value = questionCount* 1 + 1;

            $('#wrapper' + page).innerHTML += `<div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">Variable Name</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input" name="question${page}_${questionCount* 1 + 1}_var">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Field Name</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input" name="question${page}_${questionCount* 1 + 1}_field">
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="quastion${page}_${questionCount* 1 + 1}_mendatory" >
                            Mandatory
                        </label>
                    </div>
                </div>
            </div>`;
        });

        $('#page1').addEventListener('click', (event) => {
            $('#wrapper1').style.display = "block";
            $('#wrapper2').style.display = "none";
            $('#current_page').value = 1;
        })
        $('#page2').addEventListener('click', (event) => {
            $('#wrapper1').style.display = "none";
            $('#wrapper2').style.display = "block";
            $('#current_page').value = 2;
            createVarDropDown();
        })

        function toggleCondition()
        {
            $('#conditionBox').classList.toggle('is-hidden');
        }

        function createVarDropDown()
        {
            let questionCount = ($('#questionCountPage1').value) * 1;
            textnode2 = $(".selectVar");
            elel = document.querySelectorAll('.selectVar option');
            elel.forEach(option => {
                (option.text != 'Select') ? option.remove() : '';
            });
            for (let index = 1; index <= questionCount; index++) {
                var op = new Option();
                op.value = $(`input[name=question1_${index}_var]`).value;
                op.text = $(`input[name=question1_${index}_var]`).value;
                textnode2.options.add(op); 
            }
            // let variableElements = document.querySelector('input[name=question1_1_var]');
        }

        function $(element) {
            return document.querySelector(element);
        }


    </script>
</body>

</html>