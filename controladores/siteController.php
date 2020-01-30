<?php

namespace controladores;

class siteController extends Controller {

    private $miPie;
    private $miMenu;

    public function __construct() {
        parent::__construct();
        $this->miPie = "Esta Pagina forma parte del curso Desarrollo de Aplicaciones con tecnologias Web";
        $this->miMenu = [
            "Inicio" => $this->crearRuta(["accion" => "index"]),
            "Ejercicio 1" => $this->crearRuta(["accion" => "ejercicio1"]),
            "Ejercicio 2" => $this->crearRuta(["accion" => "ejercicio2"]),
            "Ejercicio 3" => $this->crearRuta(["accion" => "ejercicio3"]),
            "Ejercicio 4" => $this->crearRuta(["accion" => "ejercicio4"]),
            "Ejercicio 5" => $this->crearRuta(["accion" => "ejercicio5"]),
            "Ejercicio 6" => $this->crearRuta(["accion" => "ejercicio6"]),
            "Ejercicio 7" => $this->crearRuta(["accion" => "ejercicio7"]),
        ];
    }

    public function indexAccion() {
       
        $this->render([
            "vista" => "index",
            "pie" => $this->miPie,
            "menu" => (new \clases\Menu($this->miMenu, "Inicio"))->html(),
            "menu1" => (new \clases\Menu([
                        "Ejercicio 1" => $this->crearRuta(["accion" => "ejercicio1"]),
                        "Ejercicio 2" => $this->crearRuta(["accion" => "ejercicio2"]),
                        "Ejercicio 3" => $this->crearRuta(["accion" => "ejercicio3"]),
                        "Ejercicio 4" => $this->crearRuta(["accion" => "ejercicio4"]),
                        "Ejercicio 5" => $this->crearRuta(["accion" => "ejercicio5"]),
                        "Ejercicio 6" => $this->crearRuta(["accion" => "ejercicio6"]),
                        "Ejercicio 7" => $this->crearRuta(["accion" => "ejercicio7"]),
                        ], "Inicio"))
                    ->html()
        ]);
    }
   
    
    public function ejercicio1Accion($datos) {
        $v = "";

        if (empty($datos->getValores())) {
            $vista = "ejercicio1";
            $pie = $this->miPie;
        } else {
            //entro si llegan datos
            $pie = "Esta Pagina forma parte del curso Desarrollo de Aplicaciones con tecnologias Web";
            $vista = "resultadoEjercicio1";
            $v = $datos->getValores()['numero'];
            $objeto= new \clases\Numeros($v);
            $v = $objeto->sumaValores();
        }

        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 1"))->html(),
            "resultado" => $v,
        ]);
    }
    
    public function ejercicio2Accion($datos) {
        $v = "";

        if (empty($datos->getValores())) {
            $vista = "ejercicio2";
            $pie = $this->miPie;
        } else {
            //entro si llegan datos
            $pie = "Esta Pagina forma parte del curso Desarrollo de Aplicaciones con tecnologias Web";
            $vista = "resultadoEjercicio2";
             $v = $datos->getValores()['numero'];
            $objeto= new \clases\Numeros($v);
            $v = $objeto->sumaValores().'<br>';
            $v.= $objeto->restaValores().'<br>';
            $v.= $objeto->productoValores().'<br>';
            $v.= $objeto->divisionValores().'<br>';
            
        }

        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 2"))->html(),
            "resultado" => $v,
        ]);
    }
    public function ejercicio3Accion($datos) {
        $v = "";

        if (empty($datos->getValores())) {
            $vista = "ejercicio3";
            $pie = $this->miPie;
        } else {
            //entro si llegan datos
            $pie = "Esta Pagina forma parte del curso Desarrollo de Aplicaciones con tecnologias Web";
            $vista = "resultadoEjercicio3";
        }

        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 3"))->html(),
            "resultado" => $v,
        ]);
    }
    public function ejercicio4Accion($datos) {
        $v = "";

        if (empty($datos->getValores())) {
            $vista = "ejercicio4";
            $pie = $this->miPie;
        } else {
            //entro si llegan datos
            $pie = "Esta Pagina forma parte del curso Desarrollo de Aplicaciones con tecnologias Web";
            $vista = "resultadoEjercicio4";
        }

        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 4"))->html(),
            "resultado" => $v,
        ]);
    }
    public function ejercicio5Accion($datos) {
        $v = "";

        if (empty($datos->getValores())) {
            $vista = "ejercicio5";
            $pie = $this->miPie;
        } else {
            //entro si llegan datos
            $pie = "Esta Pagina forma parte del curso Desarrollo de Aplicaciones con tecnologias Web";
            $vista = "resultadoEjercicio5";
        }

        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 5"))->html(),
            "resultado" => $v,
        ]);
    }
    public function ejercicio6Accion($datos) {
        $v = "";

        if (empty($datos->getValores())) {
            $vista = "ejercicio6";
            $pie = $this->miPie;
        } else {
            //entro si llegan datos
            $pie = "Esta Pagina forma parte del curso Desarrollo de Aplicaciones con tecnologias Web";
            $vista = "resultadoEjercicio6";
        }

        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 6"))->html(),
            "resultado" => $v,
        ]);
    }
    public function ejercicio7Accion($datos) {
        $v = "";

        if (empty($datos->getValores())) {
            $vista = "ejercicio7";
            $pie = $this->miPie;
        } else {
            //entro si llegan datos
            $pie = "Esta Pagina forma parte del curso Desarrollo de Aplicaciones con tecnologias Web";
            $vista = "resultadoEjercicio7";
        }

        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 7"))->html(),
            "resultado" => $v,
        ]);
    }

      
}
