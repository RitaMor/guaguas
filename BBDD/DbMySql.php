<?php 

class DbMySql extends BaseDeDatos{

    protected $conexion;

    public function __construct($servidor,$usuario,$password,$db,$puerto=3306){

        parent::__construct($servidor,$usuario,$password,$db,$puerto,'mysql');
        $this->conexion = mysqli_connect($this->servidor.':'.$this->puerto,$this->usuario,$this->password);
        
        mysqli_select_db($this->conexion,$this->db);
        
    }

    public function setQuery($query){
        //$Query = mysql_real_escape_string($query);
        return $this->idConsulta = mysqli_query($this->conexion,$query);
    }

    public function queryToArray(){
        //var_dump($this->idConsulta);
        return mysqli_fetch_assoc($this->idConsulta);
        
    }

    public function __destruct(){
        mysqli_close($this->conexion);

    }

    public function verConfiguracion(){
        parent::verConfiguracion();
    }

    public function consulta($consulta){
        $this->conexion;    
        $this->setQuery($consulta);
    }
}
?>
