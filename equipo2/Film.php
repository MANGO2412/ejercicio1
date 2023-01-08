<?php
include('conexionDB.php');
//Film.php
class Film extends equipo1{

public function getAllFilm(){
    $result = $this->conectarDB();
    if($result){ //si logra conectar a la BD
        $dataset = $this->consultar("select * from film");
        echo"si consulto datos";
        /*echo"<hr>";
        print_r($dataset);*/
    }
    else{
        echo"no hay datos";
    }
    return $dataset;
}

}
?>