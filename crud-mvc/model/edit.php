<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<!-- <link rel="stylesheet" type="text/css" href="./styles/edit.css"> -->
</head>

<body>

<h1>ACTUALIZAR</h1>

<?php 
  require("connection.php");

  $connection = Connection::connection_model();

  if(!isset($_POST["update"])) {
    $id = $_GET["id"];
    $name = $_GET["name"];
    $last_name = $_GET["last_name"];
    $address = $_GET["address"];

  } else {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $last_name = $_POST["last-name"];
    $address = $_POST["address"];

    $query = "UPDATE USER_DATA_2 SET name=:name, last_name=:last_name, address=:address WHERE id=:id";

    $result=$connection->prepare($query);

    $result->bindValue(":id", $id);
    $result->bindValue(":name", $name);
    $result->bindValue(":last_name", $last_name);
    $result->bindValue(":address", $address);

    $result->execute();

    $result->closeCursor();

    header("location: ../index.php");

  }


?>

<p>
 
</p>

<p>&nbsp;</p>

<form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <table>
    <tr>
      <td><label for="id"></label> </td>
      <td>
        
        <input type="hidden" name="id" value="<?php echo $id ?>">
      </td>
    </tr>

    <tr>
      <td><label for="name">Nombre</label></td>
      <td>
        
        <input type="text" name="name" value="<?php echo $name ?>"> 
      </td>
    </tr>

    <tr>
      <td><label for="last-name">Apellido</label></td>
      <td>
        
        <input type="text" name="last-name" value="<?php echo $last_name ?>"> 
    </td>
    </tr>

    <tr>
      <td><label for="address">Dirección</label></td>
      <td>
        
        <input type="text" name="address" value="<?php echo $address ?>"> 
      </td>
    </tr>

    <tr>
      <td colspan="2"><input type="submit" name="update" value="Update"></td>
    </tr>

  </table>
</form>
<p>&nbsp;</p>
</body>
</html>