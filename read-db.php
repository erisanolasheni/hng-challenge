<?php
//PHP connect to databse
$host = 'host.com';
$db   = 'challenge';
$duser = 'user1.challenge';
$dpass = 'myUserPass001';

//Connect now

$con = new 	PDO("mysqli:host=$host;dbname=$dbname;",$duser,$dpass);

//Now fetch results using PDO

$fetch = $con->prepare("select id, stage, task from challenge order by id desc");
//Check if there is any inserted row
if($fetch->rowCount())
{
	?>
	<table><tr><th>Id</th><th>Challenge Stage</th><th>Challenge Task</th></tr>
	<?php
while($fetchRes = $fetch->(PDO::FETCH_OBJ))//This is to fetch the results as a standard PHP obeject
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