<?php

include 'db.php';

if(isset($_POST['submit'])){

    $tab_title = $_POST['tab_title'];
    $slide_title = $_POST['slide_title'];
    $slide_description = $_POST['slide_description'];

    $sql = "INSERT INTO sliders
            (tab_title,slide_title,slide_description)
            VALUES
            ('$tab_title','$slide_title','$slide_description')";

    mysqli_query($conn,$sql);

    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Add Slider</title>
</head>
<body>

<h2>Add Slider</h2>

<form method="POST">

<input
type="text"
name="tab_title"
placeholder="Tab Title"
required>

<br><br>

<input
type="text"
name="slide_title"
placeholder="Slide Title"
required>

<br><br>

<textarea
name="slide_description"
placeholder="Description">
</textarea>

<br><br>

<button name="submit">
Save
</button>

</form>

</body>
</html>