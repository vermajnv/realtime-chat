import {FetchApi} from './fetch-api.js';

let fetchApi  = new FetchApi();

$('#state').on('select2:select', function (e) {
    let state_id = e.params.data.id;
    let data = fetchApi.getData(getCityUrl + '/' + state_id, 'text');
    data.then((data) => {
        $('#city').html(data);
    })
});
