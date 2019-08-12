<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="styles/index.css">


</head>

<body>

<?php
  include("connection.php");

  /*************************PAGINATION***************************************/
  $size_page = 2;

    if(isset($_GET["page"])) {
        if($_GET["page"]==1) {
            header("location: index.php");
        } else {
            $page=$_GET["page"];
        }
    } else {

        $page = 1;
    }
    $start_since = ($page-1) * $size_page;

    $total_query = "SELECT * FROM USER_DATA_2";
    $result = $connection->prepare($total_query);
    $result->execute(array());

    $row_number = $result->rowCount();
    $total_pages = ceil($row_number/$size_page); // 10/3 = 4.


  /******************END PAGINATION************/

  //$query = $connection->query("SELECT * FROM USER_DATA_2");
  //$rows = $query->fetchAll(PDO::FETCH_OBJ);
  $rows = $connection->query("SELECT * FROM USER_DATA_2 LIMIT $start_since, $size_page")->fetchAll(PDO::FETCH_OBJ);

  if(isset($_POST["insert"])) {
    $name = $_POST["name"];
    $last_name = $_POST["last-name"];
    $address = $_POST["address"];

    $query = "INSERT INTO user_data_2 (name, last_name, address) VALUES (:name, :last_name, :address)";

    $result=$connection->prepare($query);

    $result->bindValue(":name", $name);
    $result->bindValue(":last_name", $last_name);
    $result->bindValue(":address", $address);

    $result->execute();

    $result->closeCursor();

    header("location: index.php");


  }

?>

<h1>CRUD</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <table>
    <tr>
      <td>Id</td>
      <td>Nombre</td>
      <td>Apellido</td>
      <td>Dirección</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr> 
   
    
  <?php
    foreach($rows as $person) : ?>
   	<tr>
      <td> <?php echo $person->id ?> </td>
      <td> <?php echo $person->name ?> </td>
      <td> <?php echo $person->last_name ?> </td>
      <td> <?php echo $person->address ?> </td>
 
      <td> <a href="delete.php?id=<?php echo $person->id ?>"> <input type='button' name='delete' value='Delete'> </a> </td>
      <td> 
      <a href="edit.php?id=<?php echo $person->id ?> & name=<?php echo $person->name ?> & last_name=<?php echo $person->last_name ?> & address=<?php echo $person->address ?>">
       <input type='button' name='update' value='Update'>
      </a>
      </td>
    </tr>  
  <?php
    endforeach;
  ?>



	  <tr>
	<td></td>
      <td><input type='text' name='name'></td>
      <td><input type='text' name='last-name'></td>
      <td><input type='text' name='address'></td>
      <td><input type='submit' name='insert' value='Insert'></td>
    </tr>    
  </table>

  <!-- <p>&nbsp;</p> -->
  </form>


  <?php
  /***************************************************PAGINATION NUMBER************************************************/
  for($i=1; $i<=$total_pages; $i++) {
      echo "<a class='pagination-design' href='?page=" . $i . "'>" . $i . "</a>  ";
  }

  /******************************************************************************************************************/
?>
</body>
</html>