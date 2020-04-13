<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$connection = mysqli_connect('localhost','root','','test');
$query = "INSERT INTO winners(name) ";
$query .= "VALUES('$name')";
$result = mysqli_query($connection,$query);
if(!$result){
    die("Query FAILED") ;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
</head>
<body class="container">
    <hr/>
    <h1>online quiz</h1>
    <hr/>
    <div class="row">
        <div class="card" style="width: 600px; height: 300px;">
            <div class="card-header"><strong>Congratulations, <?php if(isset($_POST['submit'])){ echo $name; }?> You are winner</strong></div>
            <div class="card-body">       
            <form action="winner.php" method="post" id="formHide">
             <div class="form-group">
             <label for="name">Name</label>
             <input type="text" required name="name" class="form-control" >
             </div>
            <input class="btn btn-primary" type="submit" name="submit" id="btn-hide">
            </form>
            </div>
        </div>
    </div>
</script>
</body>
</html>