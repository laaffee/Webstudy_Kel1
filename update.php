<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>


<?php
$id = $_GET ['id'];
include "config.php";
$Rdata = mysqli_query($con, "select * from todo WHERE id=$id");
$data = mysqli_fetch_array($Rdata);
?>

<body>
<form action="update1.php" method="POST">
        <div class="update" id="update">
            <br><br><br><br><br><br><br><br><br>
                <h3 class="text-center">Update</h3>
                <div class="col-10">
                    <input type="text" value="<?php echo $data['list']?>" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline">📝</button>
                    <input type="hidden" name="id" value="<?php echo $data['id']?>">
                </div>
            </div>
        </div>
        </form>
</body>
</html>