<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title>Mostrando Blog</title>
</head>
<body>

    <h2>Blog</h2>
    <hr>

    <?php
        $connection = mysqli_connect("localhost", "root", "", "blog-bbdd", "3308");
        mysqli_set_charset($connection, "UTF8");
        //Check connection.
        if(!$connection) {
            echo "La conexión ha fallado: " . mysqli_error($connection);
            exit();
        }

        $sql = "SELECT * FROM content ORDER BY DATE DESC";
        $result = mysqli_query($connection, $sql);
        mysqli_close($connection);

        while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<h3>" . $rows['title'] . "</h3>";
            echo "<h4>" . $rows['date'] . "</h4>";
            echo "<div style = 'width: 400px'>" . $rows['comment'] . "</div> <br>";


            if($rows["image"] != "") {
                echo "<img src='images/". $rows['image'] ."' width='300px;' >";
                
            }

            echo "<hr>";


        }

        

    ?>




</body>
</html>