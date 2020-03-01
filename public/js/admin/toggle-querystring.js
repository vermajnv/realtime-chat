$('#modal-assign-role').on('shown.bs.modal', function (ele) {
    $('#assignRole')[0].action = $('#assignRole')[0].action + $('#modal_assign_role').data('myval');
})
$('#modal-assign-role').on('hidden.bs.modal', function (ele) {
    let sourceURL = $('#assignRole')[0].action;
    let replacedData = (sourceURL.indexOf("=") !== -1) ? sourceURL.split("=")[1] : "";
    $('#assignRole')[0].action = sourceURL.replace(replacedData,'');
})
