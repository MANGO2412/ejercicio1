<!DOCTYPE html>
<?phprequire_once("conexionDB.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equipo 1</title>
</head>
<body>
<?php 
    include_once("Film.php");
    $myFilm=new Film();
    $dataset=$myFilm->getAllFilm();
	if($dataset=="vacio"){
    echo "no hay datos";
	}
	else{
    echo "ahi van datos <br>";
	echo'<br>';
    while($fila=mysqli_fetch_assoc($dataset)){
        echo '<tr>';
       // print_r($fila);
       foreach($fila as $posicion =>$valor){
        echo '<br>';
        echo $posicion.' : '.$valor;
        
       }
       echo'<hr>';
    }
}
	?>

</body>
</html>