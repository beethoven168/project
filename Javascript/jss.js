// Validating Empty Field
function check_empty() {
if (document.getElementById('name').value == ""){
alert("Please input the Project name!");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully");
}
}
// Validating Empty task Field
function check_empty_task() {
if (document.getElementById('name').value == ""){
alert("Please input the Task name!");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}