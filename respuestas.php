<?php
    require_once("operaciones.php");
    $obj=new operaciones();
    
    $nombre=$obj->setNombre($_POST["nombre"]);
    $apellido=$obj -> setApellido($_POST["apellidos"]);
    $tos=$obj -> setTos($_POST["tos"]);
    $garganta=$obj -> setGarganta($_POST["garganta"]);
    $escalofrios=$obj -> setEscalofrios($_POST["escalofrios"]);
    $estomago=$obj -> setEstomago($_POST["estomago"]);
    $corporal=$obj -> setCorporal($_POST["corporal"]);
    $fiebre=$obj -> setFiebre($_POST["fiebre"]);
    $respirar=$obj -> setRespirar($_POST["respirar"]);
    $nasal=$obj -> setNasal($_POST["nasal"]);
    $ojos=$obj -> setOjos($_POST["ojos"]);
    $dolorCabeza=$obj -> setDolorCabeza($_POST['dolorCabeza']);
    $olfato=$obj -> setOlfato($_POST['olfato']);
    $respirarr=$obj -> setRespirarr($_POST['respirarr']);
    $cansancio=$obj -> setCansancio($_POST['cansancio']);
    $mensaje1=$obj -> setMensaje1($_POST["mensaje1"]);
    $mensaje2=$obj -> setMensaje2($_POST["mensaje2"]);
    $mensaje3=$obj -> setMensaje3($_POST["mensaje3"]);


    $total=0; 

    if($obj->getTos() == "si"){ $total+=5; } else if($obj->getTos() == "no"){ $total+=0; }else { $total+=0; }
    if($obj->getGarganta() == "si"){ $total+=5; } else if($obj->getGarganta() == "no"){ $total+=0; } else { $total+=0; }
    if($obj->getEscalofrios() == "si"){ $total+=5; } else if($obj->getEscalofrios() == "no"){ $total+=0; } else { $total+=0; }
    if($obj->getEstomago() == "si"){ $total+=5; } else if($obj->getEstomago() == "no"){ $total+=0; } else { $total+=0; }
    if($obj->getCorporal() == "si"){ $total+=5; } else if($obj->getCorporal() == "no"){ $total+=0; } else { $total+=0; }
    if($obj->getFiebre() == "si"){ $total+=5; } else if($obj->getFiebre() == "no"){ $total+=0; } else { $total+=0; }
    if($obj->getRespirar() == "si"){ $total+=5; } else if($obj->getRespirar() == "no"){ $total+=0; } else { $total+=0; }
    if($obj->getNasal() == "si"){ $total+=5; } else if($obj->getNasal() == "no"){ $total+=0; } else { $total+=0; }
    if($obj->getOjos() == "si"){ $total+=5; } else if($obj->getOjos() == "no"){ $total+=0; } else { $total+=0; }

    if(isset($_POST['dolorCabeza'])){
        $var = $_POST['dolorCabeza'];
        if($var == "Si"){ 
            $total+=5;
        } else if($var == "Mas o menos"){
             $total+=3; 
        }else if ($var == "No"){ 
            $total+=0;
        }
    }

    if(isset($_POST['olfato'])){
        $var = $_POST['olfato'];
        if($var == "Si"){ 
            $total+=5;
        } else if($var == "Mas o menos"){
             $total+=3; 
        }else if ($var == "No"){ 
            $total+=0;
        }
    }

    if(isset($_POST['respirarr'])){
        $var = $_POST['respirarr'];
        if($var == "Si"){ 
            $total+=5;
        } else if($var == "Mas o menos"){
             $total+=3; 
        }else if ($var == "No"){ 
            $total+=0;
        }
    }

    if(isset($_POST['cansancio'])){
        $var = $_POST['cansancio'];
        if($var == "Si"){ 
            $total+=5;
        } else if($var == "Mas o menos"){
             $total+=3; 
        }else if ($var == "No"){ 
            $total+=0;
        }
    }
       
    $_SESSION["total"] = $total;
    $_SESSION["nombre"] = $obj->getNombre();
    $_SESSION["apellido"] = $obj->getApellido();
    $_SESSION["mensaje1"] = $obj->getMensaje1();
    $_SESSION["mensaje2"] = $obj->getMensaje2();
    $_SESSION["mensaje3"] = $obj->getMensaje3();

    include_once("resultado.php");
?>