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
            <input type="hidden" name="_questionCount" value="1" id="questionCount">
            <div id="wrapper"> 
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label">Your question</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="question1">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label">Variable Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="question1_var">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label">Field Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input" name="question1_field">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="checkbox">
                                <input type="checkbox" name="quastion1_mendatory" >
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
            <div class="column">
                <div id="file-js-example" class="file has-name">
                    <label class="file-label">
                        <input class="file-input" type="file" name="template" id="file">
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label">
                                Choose a file…
                            </span>
                        </span>
                        <span class="file-name">
                            No file uploaded
                        </span>
                    </label>
                </div>
            </div>

            <div class="buttons">
                <button class="button is-primary" type="submit" id="submitForm">Submit</button>
            </div>
        </form>
    </div>
    <script>
        let form = document.querySelector('#myForm');
        
        document.querySelector('#myForm').addEventListener('submit', (form) => {
            form.preventDefault();
            var formData = new FormData(form.target);
            // formData.append( 'files', document.querySelector('#file').files[0]);
            // let data = [...formData].reduce((prev, cur) => { prev[cur[0]] = cur[1]; return prev;}, {});
            var myInit = { 
                method: 'POST',
                headers: {
                    // 'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('#csrf_token').value,
                },
                body : formData,
                mode: 'cors',
                cache: 'default',
                redirect: 'follow',
            };
            
            var myRequest = new Request('{{ route('interview.store')}}', myInit);
            
            fetch(myRequest).then(function(response) {
                document.querySelector('#submitForm').innerHTML = 'Please Wait...';
                var contentType = response.headers.get("content-type");
                if(contentType && contentType.includes("application/json")) {
                    return response.json();
                }
                throw new TypeError("Error: JSON not returned from sign-in site");
            }).then((response) => {
                document.querySelector('#submitForm').innerHTML = 'Submit';
                
            });
        })

        let clicks = 0;
        document.querySelector('#addMore').addEventListener('click', (event) => {
            event.preventDefault();
            let questionCount = document.querySelector('#questionCount').value;
            document.querySelector('#questionCount').value = questionCount* 1 + 1; 
            document.querySelector('#wrapper').innerHTML += `<div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">Your question</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input" name="question${questionCount* 1 + 1}">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Variable Name</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input" name="question${questionCount* 1 + 1}_var">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Field Name</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input" name="question${questionCount* 1 + 1}_field">
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="quastion${questionCount* 1 + 1}_mendatory" >
                            Mandatory
                        </label>
                    </div>
                </div>
            </div>`;
        });

        const fileInput = document.querySelector('#file-js-example input[type=file]');
        fileInput.onchange = () => {
            if (fileInput.files.length > 0) {
            const fileName = document.querySelector('#file-js-example .file-name');
            fileName.textContent = fileInput.files[0].name;
            }
        }
    </script>
</body>

</html>