<?php
    class Veiculo {
        private $codigo;
        private $fabricante;
        private $modelo;
        public function __construct($codigo,$fabricante,$modelo){
            $this->codigo = $codigo;
            $this->fabricante = $fabricante;
            $this->modelo = $modelo;


        }
        public function setCodigo($codigo){
            $this->codigo=$codigo;
        }

        public function getCodigo(){
            return $this->codigo;
        }
        
	    public function getFabricante() {
		    return $this->fabricante;
	    }
	    public function setFabricante($fabricante): self {
		    $this->fabricante = $fabricante;
		    return $this;
	    }

        public function getModelo() {
            return $this->modelo;
        }
        public function setModelo($modelo): self {
            $this->modelo = $modelo;
            return $this;
        }
        public function mostrar(){
            echo 'ID: '.$this->codigo . '<br>';
            echo 'Fabricante '. $this->fabricante . '<br>';
            echo 'Modelo: '. $this->modelo.'<br>';
        }
}
?>