import {FetchApi} from '../fetch-api.js';

let fetchApi  = new FetchApi();
document.getElementById("assignRole").addEventListener("submit", function (form) {
    initWaitMe('.modal-dialog');
    var formData = new FormData(form.target);
    let data = [...formData].reduce((prev, cur) => { prev[cur[0]] = cur[1]; return prev;}, {});
    form.preventDefault();
    AssignRole(form.target.action, data);
});
function AssignRole(url, data)
{
    fetchApi.postData(url, {
        data: data,
    })
    .then((data) => {
        console.log(data); // JSON data parsed by `response.json()` call
        $('.modal-dialog').waitMe('hide');
        $('#modal-assign-role').modal('hide');
    });
}
