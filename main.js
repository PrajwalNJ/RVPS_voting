$("#sidebar_button").click(function(e){
    e.preventDefault();
    $("#wrapper").toggleClass("active");
    $("#sidebar_button a").toggleClass("active");
});
$("#top_menu li").click(function (e) {
    e.preventDefault();
    $("#top_menu li").submit("active");
});
$("#student_details").submit(function (e) {
    console.log("entered jquery");
    votingDisplay();
    e.preventDefault();
    var rollno=$("#roll-number").val();
    var sclass=$("#class").val();
    var section=$("#section").val();
    var house=$("#house").val();
    //console.log(rollno,sclass,section,house);
    $.ajax(
        {
            url:"validate_student.php",
            type:"POST",
            data:{rollno: rollno,sclass: sclass,section: section,house: house},

        success: function(data)
        {
             console.log(data);
             if(data==1)
             {
                caste_vote();
             }
             else
                 {
                 alert("Wrong details entered..Please try again");
             }
        }
        });
        })
function votingDisplay() {
    var error = "";
    if (isNaN(document.getElementById('roll-number').value))
        error += "Invalid Entry for Roll Number !! \n";
    if (document.getElementById('class').options[document.getElementById('section').selectedIndex].text == "Select Class")
        error += "Select your class ! \n";
    if (document.getElementById('section').options[document.getElementById('section').selectedIndex].text == "Select Section")
        error += "Select your section ! \n";
    if (document.getElementById('house').options[document.getElementById('house').selectedIndex].text == "Select House")
        error += "Select your house ! \n";
    if (error != "")
        alert(error);
}
function caste_vote() {
        document.getElementById('cast-vote_default').style.display='block';
        document.getElementById('school').style.display='-webkit-box';
        for(var i=1;i<5;i++)
            document.getElementsByClassName('election-type')[i].style.display='none';
        document.getElementById(document.getElementById('house').value.toLowerCase()).style.display='-webkit-box';
        $('#voting-modal').modal('hide');

}

function checkRadioButton(name,index) {
    document.getElementsByName(name)[index].checked=true;
}
