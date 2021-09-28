<?php
  
    class operaciones{

        protected $nombre= "";
        protected $apellido= "";
        protected $tos= "";
        protected $garganta= "";
        protected $escalofrios= "";
        protected $estomago= "";
        protected $corporal= "";
        protected $fiebre= "";
        protected $respirar= "";
        protected $nasal= "";
        protected $ojos= "";
        protected $dolorCabeza= "";
        protected $olfato= "";
        protected $respirarr= "";
        protected $cansancio= "";
        protected $mensaje1= "";
        protected $mensaje2= "";
        protected $mensaje3= "";

   
        public function setNombre($nombre){
            $this->nombre= $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }

        public function setApellido($apellido){
            $this->apellido= $apellido;
        }
        public function getapellido(){
            return $this->apellido;
        }
        
        public function setTos($tos){
            $this->tos= $tos;
        }
        public function getTos(){
            return $this->tos;
        }
    
        public function setGarganta($garganta){
            $this->garganta = $garganta;
        }
        public function getGarganta(){
            return $this->garganta;
        }
    
        public function setEscalofrios($escalofrios){
            $this->escalofrios = $escalofrios;
        }
        public function getEscalofrios(){
            return $this->escalofrios;
        }
    
        public function setEstomago($estomago){
            $this->estomago = $estomago;
        }
        public function getEstomago(){
            return $this->estomago;
        }
    
        public function setCorporal($corporal){
            $this->corporal = $corporal;
        }
        public function getCorporal(){
            return $this->corporal;
        }
    
        public function setFiebre($fiebre){
            $this->fiebre = $fiebre;
        }
        public function getFiebre(){
            return $this->fiebre;
        }
    
        public function setRespirar($respirar){
            $this->respirar = $respirar;
        }
        public function getRespirar(){
            return $this->respirar;
        }
    
        public function setNasal($nasal){
            $this->nasal = $nasal;
        }
        public function getNasal(){
            return $this->nasal;
        }
    
        public function setOjos($ojos){
            $this->ojos = $ojos;
        }
        public function getOjos(){
            return $this->ojos;
        }
    
        public function setDolorCabeza($dolorCabeza){
            $this->dolorCabeza = $dolorCabeza;
        }
        public function getDolorCabeza(){
            return $this->dolorCabeza;
        }
    
        public function setOlfato($olfato){
            $this->olfato = $olfato;
        }
        public function getOlfato(){
            return $this->olfato;
        }
    
        public function setRespirarr($respirarr){
            $this->respirarr = $respirarr;
        }
        public function getRespirarr(){
            return $this->respirarr;
        }
    
        public function setCansancio($cansancio){
            $this->cansancio = $cansancio;
        }
        public function getCansancio(){
            return $this->cansancio;
        }
    
        public function setMensaje1($mensaje1){
            $this->mensaje1 = $mensaje1;
        }
        public function getMensaje1(){
            return $this->mensaje1;
        }

        public function setMensaje2($mensaje2){
            $this->mensaje2 = $mensaje2;
        }
        public function getMensaje2(){
            return $this->mensaje2;
        }

        public function setMensaje3($mensaje3){
            $this->mensaje3 = $mensaje3;
        }
        public function getMensaje3(){
            return $this->mensaje3;
        }

        

        public function _construct($nombre, $apellido, $tos, $garganta, $escalofrios, $estomago, $corporal, $fiebre, $respirar, $nasal, $ojos, $dolorCabeza, $olfato, 
                        $respirarr, $cansancio, $mensaje1, $mensaje2, $mensaje3, $total){
            $this->$nombre = $nombre;
            $this->$apellido =$apellido;
            $this->$tos = $tos;
            $this->$garganta = $garganta;
            $this->$escalofrios = $escalofrios;
            $this->$estomago = $estomago;
            $this->$corporal = $corporal;
            $this->$fiebre = $fiebre;
            $this->$respirar = $respirar;
            $this->$nasal = $nasal;
            $this->$ojos = $ojos;
            $this->$dolorCabeza = $dolorCabeza;
            $this->$mensaje1 = $mensaje1;
            $this->$mensaje2 = $mensaje2;
            $this->$mensaje3 = $mensaje3;
            $this->$total = $total;               
         }
    }
?>