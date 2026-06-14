<?php

include 'db.php';

$result =
mysqli_query(
$conn,
"SELECT * FROM sliders"
);

$rows = [];

while(
$row =
mysqli_fetch_assoc($result)
){
    $rows[] = $row;
}

?>

<!DOCTYPE html>
<html>

<head>

<title>WPoets Assignment</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<link
rel="stylesheet"
href="assets/css/style.css">

</head>

<body>

<div class="container">

<div class="row">

<!-- COLUMN 1 -->

<div class="col-md-3">

<?php
foreach($rows as $index=>$row){
?>

<div
class="tab-item <?= $index==0?'active':'' ?>"
data-slide="<?= $index ?>">

<?= $row['tab_title'] ?>

</div>

<?php } ?>

</div>

<!-- COLUMN 2 -->

<div class="col-md-5">

<div class="content-slider">

<?php
foreach($rows as $row){
?>

<div>

<h2>
<?= $row['slide_title'] ?>
</h2>

<p>
<?= $row['slide_description'] ?>
</p>

</div>

<?php } ?>

</div>

</div>

<!-- COLUMN 3 -->

<div class="col-md-4">

<div class="image-slider">

<?php
foreach($rows as $row){
?>

<div>

<img
src="assets/images/<?= $row['image'] ?>"
class="img-fluid">

</div>

<?php } ?>

</div>

</div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="assets/js/custom.js"></script>

</body>

</html>