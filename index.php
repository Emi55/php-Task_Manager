<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/boostrap.min.css"/>
</head>
<body>
<?php

// connect to my database
$db = new PDO('mysql:host=172.31.22.43;dbname=Emilie200439052','Emilie200439052', 'YbLpj12vzs');

// set up & execute query
$sql = "SELECT * FROM Task_Manager";
$cmd = $db->prepare($sql);
$cmd->execute();
$Task_Manager = $cmd->fetchAll();

// start table
echo '<table class="table table-striped"><thead><th>Tasks</th><th>Date</th><th>Status</th><th>Importance</th></thead>';

// loop through data and display the results
foreach ($Task_Manager as $value) {
    echo '<tr><td>' . $value['Tasks'] . '</td>
        <td>' . $value['Date'] . '</td>
        <td>' . $value['Status'] . '</td>
        <td>' . $value['Importance'] . '</td></tr>';
}
echo '</table>';
?>

</body>
</html>