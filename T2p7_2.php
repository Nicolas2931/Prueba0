
<html>
<head>
    <title>Punto 7.2>
    <style>
        h1,p{
            text-align: center;
        }
    </style>    
</head>

<body>
 <h1>Ejercicio 7.2</h1> 
 <p>Escribir el algoritmo que permita obtener el número 
    de elementos positivos de una tabla</p> 
    <form action=T2p7_2.php method="POST">
    <table>
        <tr>
            <th>Digite el tamaño de la tabla:</th>
            <td><input type="number" name="tam"></td>
        </tr>   
        <tr>
            <td colspan="2"><input type="submit" name="ver" value="ENTER"></td>
            <td colspan="2"><input type="reset" value="LIMPIAR"></td>
        </tr>

     </table>
     <?php
        if(isset($_POST['ver'])){
            $t=$_REQUEST['tam'];
        }
     ?>

     

 </form>    
</body>    
</html>