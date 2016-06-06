function doFirst() {

    dateFormat();

    $('#textSkin ul li ul').hide();
    $('#textSkin > ul > li > span').click(function() {
        $(this).next().slideToggle('fast');
    });

}


function dateFormat() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) { dd = '0' + dd }
    if (mm < 10) { mm = '0' + mm }

    today = yyyy + '-' + mm + '-' + dd;

    $('#date').attr('value', today);

    //alert($('#date').attr('value'));
}

// function textSubmit(){

// 	var date = document.getElementById("date").value;
// 	var time = document.getElementById("time").value;
// 	var topic  = document.getElementById("topic").value;
// 	var todo_text = document.getElementById("todo_text").value;

// 	$('#textSkin').append("<ul><li><span>"+date+","+time+","+topic+"</span><ul><li>"+todo_text+"</li></ul></li></ul>");


// }

window.addEventListener('load', doFirst, false);