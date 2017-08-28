<?php
// error_reporting(-1);
//PHP connect to databse
$host = 'localhost';
$db   = 'hng_challenge';
$duser = 'root';
$dpass = '';

//Connect now

$con = new 	PDO("mysql:host=$host;dbname=$db;",$duser,$dpass);

//Now fetch results using PDO

$results = $con->prepare("select id, stage, task from challenge");
$results->execute();
//Check if there is any inserted row
if($results->rowCount())
{
	?>
	<table>
	<tr><th>Id</th><th>Challenge Stage</th><th>Challenge Task</th></tr>
	<?php
while($fetchRes = $results->fetch(PDO::FETCH_OBJ))//This is to fetch the results as a standard PHP obeject
{
	$id   = $fetchRes->id;
	$stage = $fetchRes->stage;
	$task = $fetchRes->task;
	?>
	<tr><td><?php echo $id; ?></td><td><?php echo $stage; ?></td><td><?php echo $task; ?></td></tr>
	<?php
}
?>
</table>
<?php
}
?>