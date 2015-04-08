<?php
123
include('header.php');
//make the query to run.
//Sort the last name in an ascending order (A-Z)
$query = "SELECT * FROM project ORDER BY Project_ID ASC";
$result = $connection->query($query) OR die(mysql_error($connection));
?>
<!-- Body Starts Here -->
<body id="body" style="overflow:hidden;">
<div id="abc">

<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Create project Form -->
<form action="php/add_project.php" id="form" method="post" name="form">
<img id="close" src="images/3.png" onclick ="div_hide()">
<h2>Create Project</h2>
<hr>
<input id="name" name="project_name" placeholder="Project Name" type="text">
<input name ="submitted" type="hidden" value="true">
<a href="javascript:%20check_empty()" id="submit">Send</a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
<!-- Display project table-->
<th>Project Created</th>
<table>
	<tr> 
	<td>Project ID</td>
	<td>Project Name</td>
	</tr>
<?php
//now we turn the results into an array and loop through them.
while($row = mysqli_fetch_array($result))
{
$project_id = $row['Project_ID'];
$project_name = $row['Project_Name'];
?>
<tr>
<td><?php echo $project_id;?></td>
<td><?php echo $project_name;?></td>
</tr>
	<!--<form action = '' method = 'post'>
	<input name =  'Add to cart' type = 'submit' value="Add to cart">-->

<?php } 
?>

</table>

<button id="popup" onclick="div_show()">Add project!</button>
</body>
<!-- Body Ends Here -->