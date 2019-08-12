<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/jpg" href="">
    <title>Vista de productos</title>
</head>
<body>

<?php
    require("model/pagination.php");
?>

<form action="model/insert.php" method="POST">
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
    foreach($person_matrix as $person) : ?>
   	<tr>
      <td> <?php echo $person["id"] ?> </td>
      <td> <?php echo $person["name"] ?> </td>
      <td> <?php echo $person["last_name"] ?> </td>
      <td> <?php echo $person["address"] ?> </td>
 
      <td> <a href="model/delete.php?id=<?php echo $person["id"] ?>"> <input type='button' name='delete' value='Delete'> </a> </td>
      <td> 
      <a href="model/edit.php?id=<?php echo $person["id"] ?> & name=<?php echo $person["name"] ?> & last_name=<?php echo $person["last_name"] ?> & address=<?php echo $person["address"] ?>">
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