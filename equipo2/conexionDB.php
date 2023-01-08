<?php

class equipo1{

private $HOST;
private $USER;
private $PASSW;
private $DB;
private $connection;
//constructor
public function __construct(){
		$this->HOST ="localhost";
		$this->USER ="root";
		$this->PASSW ="";
		$this->DB ="sakila2";
}

public function conectarDB(){
	$this->connection=@mysqli_connect($this->HOST,$this->USER,$this->PASSW,$this->DB);
	if($this->connection){
		//echo " si conecto";
		return true;
	}
	else{
		echo "no conecto";
		return false;
	}
}

    public function consultar($sql){
        $this->dataset= mysqli_query($this->connection, $sql);
        if($this->dataset){
            echo "consulta realizada";
            return $this->dataset;
        }
        else{
            echo "Consulta fallida";
            return "Vacio";
        }
    }
}

?>