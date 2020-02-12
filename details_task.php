<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Details</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="index.php" href="../A1/index.php"/>
    <link rel="save_page" href="../A1/save_page"/>
</head>
<body>

<!-- CREATE FORM -->
<form method="post" action="index.php">
    <fieldset>
        <label for="Tasks" class="col-md-2">>Tasks: *</label>
        <input name="Tasks" id="Tasks" required maxlength="45" />
    </fieldset>
    <fieldset>
        <label for="Status" class="col-md-2">>Status:</label>
        <input name="Status" id="Status" maxlength="11" />
    </fieldset>
    <fieldset>
    <fieldset>
        <label for="Importance" class="col-md-2">>Importance: *</label>
        <input name="Importance" id="Importance" required maxlength="45" />
    </fieldset>
    <label for="Date" class="col-md-2">>Date:</label>
        <input name="Date" id="Date" type="number" min="10" />
    </fieldset>
   
    <button class="offset-md-2 btn btn-primary">Save</button>
</form>
</body>
