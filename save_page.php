<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do List</title>
</head>
<body>

<?php

// save inputs
$Tasks = $_POST['Tasks'];
$Date = $_POST['Date'];
$Status = $_POST['Status'];
$Importance = $_POST['High'];

// default importance to false
$Importance = false;

// change importance to true if the user checked the solo checkbox
if (!empty($_POST['Importance'])) {
    $Importance = true;
}

// validate inputs
$ok = true; // variable to determine if we should save or not

if (empty($Tasks)) {
    echo 'Input Task<br />';
    $ok = false;
}

// strlen is a PHP function that shows the length of a string value
elseif (strlen($Tasks) > 44) {
    echo 'Not more than 45 character please <br />';
    $ok = false;
}

// ! means NOT / false.  is_numeric is a PHP function that checks if a value is an integer or not
if (!empty($Date)) {
    if (!is_numeric($Date)) {
        echo 'Must be a number <br />';
        $ok = false;
    }

    if ($Date < 0) {
        echo 'Must be a number r<br />';
        $ok = false;
    }
}

// is the form ok?
if ($ok == true) {
    // connect
    $db = new PDO('mysql:host=172.31.22.43;dbname=Emilie200439052','Emilie200439052', 'YbLpj12vzs');

    // set up insert
    $sql = "INSERT INTO Task_Manager (Tasks, Date, Status, Importance) VALUES 
        (:Tasks, :Date, :Status, :Importance)";
    $cmd = $db->prepare($sql);

     // call the values 
     $cmd->bindParam(':Tasks', $idTask_Manager, PDO::PARAM_STR, 45);
     $cmd->bindParam(':Date', $Date, PDO::PARAM_INT, 11);
     $cmd->bindParam('Status', $Status, PDO::PARAM_STR,45;
     $cmd->bindParam(':Importance', $Importance, PDO::PARAM_STR, 45);
 
 

    // save to db
    $cmd->execute();

    // disconnect
    $db = null;

    echo 'Task Saved';
}
?>

</body>
</html>













































    // call the values 
    $cmd->bindParam(':idTask_Manager', $idTask_Manager, PDO::PARAM_INT, 11);
    $cmd->bindParam(':Tasks', $Tasks, PDO::PARAM_STR, 45);
    $cmd->bindParam(':Date', $Date, PDO::PARAM_INT, 45);
    $cmd->bindParam(':Status', $Status, PDO::PARAM_INT, 45);
    $cmd->bindParam(':Importance', $Date, PDO::PARAM_STR, 45);

    // save to db
    $cmd->execute();

    // disconnect
    $db = null;

    echo 'Task Saved';
}
?>
</body>
</html>
