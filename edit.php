<?php

include 'db.php';

$id = $_GET['id'];

$result =
mysqli_query(
$conn,
"SELECT * FROM sliders WHERE id=$id"
);

$row =
mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $tab_title =
    $_POST['tab_title'];

    $slide_title =
    $_POST['slide_title'];

    $slide_description =
    $_POST['slide_description'];

    mysqli_query(
    $conn,
    "UPDATE sliders
    SET
    tab_title='$tab_title',
    slide_title='$slide_title',
    slide_description='$slide_description'
    WHERE id=$id"
    );

    header("Location:index.php");
}

?>

<form method="POST">

<input
type="text"
name="tab_title"
value="<?= $row['tab_title']; ?>">

<br><br>

<input
type="text"
name="slide_title"
value="<?= $row['slide_title']; ?>">

<br><br>

<textarea
name="slide_description"><?= $row['slide_description']; ?></textarea>

<br><br>

<button name="update">
Update
</button>

</form>
