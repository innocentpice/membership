$(document).ready(() => {
    $('#frm_avatar').change(() => {
        var output = document.getElementById('img_preview');
        output.src = URL.createObjectURL(event.target.files[0]);
    });
});