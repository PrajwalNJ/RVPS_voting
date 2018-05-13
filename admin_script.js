$(window).on('load',function(){
    $('#admin-login-modal').modal('show');
});
document.getElementById('candidate_pic').onchange = function () {
    document.getElementById('image-text').value=this.value;
};

$("#admin_login").submit(function (e) {
    if(document.getElementById('admin_username')== "")
        alert("username cannot be empty");//replace this by a more better dialog
    if(document.getElementById('admin_password')== "")
        alert("password cannot be empty");
    e.preventDefault();
    var admin_username=$("#admin_username").val();
    var admin_password=$("#admin_password").val();
    $.ajax({
        url:"validate_admin.php",
        type:"POST",
        data:{admin_username: admin_username,admin_password: admin_password},
        success: function (data) {
            console.log(data);
            if(data!=1)
            {
                alert("wrong details entered");
            }
            else
            {
                $('#admin-login-modal').modal('hide');
            }
            }
           });
})