<!DOCTYPE html>
<html>

<head>
    <title>Frullania appalachiana</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified JavaScript -->


</head>
<body>
<?php
    $picture = $_GET['picture'];
?>
<div class="container-fluid" style="padding: 0;">



    <div id='panzoom' style='height:520px;margin: auto'>
        <div class='text-center' style='height:inherit;padding: 10px;'>
    <img src="images/<?=  $picture ?>"  height="520" >
    </div>
    </div>
</div>

<div id="zoom-controls" style='position:relative;left:5%;width:185px;display:block;float:left;background: none transparent;'>
    <button class='zoom-in btn btn-primary'  title="zoom in">+</button>
    <button class='zoom-out btn btn-primary'  title="zoom out" hidden="true">-</button>
    <button class='reset btn btn-danger'  title="reset">Reset</button>
</div>

</body>

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.panzoom.js"></script>
<script src="main.js"></script>
<script>
    $("#panzoom").panzoom({
        $zoomIn: $(".zoom-in"),
        $zoomOut: $(".zoom-out"),
        $zoomRange: $(".zoom-range"),
        $reset: $(".reset")
    });
</script>
</html>

