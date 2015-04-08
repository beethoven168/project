<?php
include('header2.php');
//make the query to run.
//Sort the last name in an ascending order (A-Z)
$query = "SELECT * FROM task ORDER BY task_ID ASC";
$result = $connection->query($query) OR die(mysql_error($connection));
?>
<!-- Body Starts Here -->
<body id="body" style="overflow:hidden;">
<div id="abc">

<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Create project Form -->
<form action="php/add_Task.php" id="form" method="post" name="form">
<img id="close" src="images/3.png" onclick ="div_hide()">
<h2>Create task</h2>
<hr>
<input id="name" name="task_name" placeholder="Task Name" type="text">
<input name ="submitted" type="hidden" value="true">
<a href="javascript:%20check_empty_task()" id="submit">Send</a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
<!-- Display project table-->
<table>
<h1> Task created </h1>
	<tr>
		<td>Task ID</td>
		<td>Task Name</td>
	</tr>
	
<?php
//now we turn the results into an array and loop through them.
while($row = mysqli_fetch_array($result))
{
$task_id = $row['task_ID'];
$task_name = $row['task_name'];
$task_feedback = $row['task_feedback'];
$task_status = $row['task_status'];
$task_detail = $row['task_detail'];
?>
<tr>
<td><?php echo $task_id;?></td>
<td><?php echo $task_name;?></td>
</tr>
	<!--<form action = '' method = 'post'>
	<input name =  'Add to cart' type = 'submit' value="Add to cart">-->

<?php } 
?>
</table>

<button id="popup" onclick="div_show()">Add new task!</button>
</body>
<!-- Body Ends Here -->