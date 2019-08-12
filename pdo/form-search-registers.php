<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpg" href="">
    <title> Formulario para buscar registro </title>

</head>

<body>

    <form name="form1" action="search-registers.php" method="GET">
        <table>
            <tr>
                <td> <label for="section"> Sección: </label> </td>
                <td> <input type="text" name="section" placeholder="escribe la sección..."> </td>
            </tr>

            <tr> 
                <td> <label for="origin-country"> País de origen: </label> </td>
                <td> <input type="text" name="origin-country" placeholder="escribe el país de origen..."> </td>
            </tr>

            <tr> 
                <td colspan="2"> <input type="submit" name="send" value="Ok"> </td>
                
            </tr>
        
        

        
        


        </table>
    </form>


</body>

</html>