<?php
$fname=$_REQUEST["fname"];

$db = new SQLite3('db/test.db');

//$testfname = "'ACTIVE_FLAG_LOOKUP'";
//below adds qoutes to allow search to work correctly
$testfname = '\''.'%'.$fname.'%'.'\'';

$thequery = 'select * from glossary where title like '. $testfname .' limit 100';
//echo $thequery;
//echo $testfname;

$results = $db->query($thequery);


echo '<table id="customers">
<tr>
<th>Id</th>
<th>Title</th>
<th>Definition</th>
<th>Notes</th>
<th>Examples</th>
<th>Relationships</th>
</tr>';

while ($row = $results->fetchArray()){
	echo 
	'<tr>
	<td>'.$row[''].'</td>
	<td>'.$row['title'].'</td>
	<td>'.$row['definition'].'</td>
	<td>'.$row['notes'].'</td>
	<td>'.$row['examples'].'</td>
	<td>'.$row['relationships'].'</td>
	</tr>';
}
echo '</table>';

//echo 'test';
//echo $fname;

?>
