$(window).on('load',function(){
    $('#admin-login-modal').modal('show');
});
document.getElementById('candidate_pic').onchange = function () {
    document.getElementById('image-text').value=this.value;
};