<?php
    
    abstract class Entrada implements Detalle{
        
        public $id;
        public $fecha_creacion;
        public $tipo;
        public $titulo;
        public $descripcion;

        public function __construct($datos = []) {
            foreach ($datos as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }

    class EntradaUnaColumnas extends Entrada {
        public $titulo1;
        public $descripcion;

        public function obtenerDetallesEspecificos(): string {

            return "Entrada de una columna: " .$titulo;

        }
    }

    interface Detalle {

        public function obtenerDetallesEspecificos(): string;

    }

    class GestorBlog {
        private $entradas = [];

        public function cargarEntradas() {
            if (file_exists('blog.json')) {
                $json = file_get_contents('blog.json');
                $data = json_decode($json, true);
                

                foreach ($data as $entradaData) {

                    switch ($entradaData['tipo']) {
                        case 1;
                            $this->entradas[] = new EntradaUnaColumnas($entradaData);
                            break;
                        case 2;
                            $this->entradas[] = new EntradaDosColumnas($entradaData);
                            break;
                        case 3;
                            $this->entradas[] = new EntradaTresColumnas($entradaData);
                            break;
                    } 

                   
                   
                    #$this->entradas[] = new Entrada($entradaData);
                    #$this->entradas[] = new EntradaUnaColumna($entradaData);
                }
            }
        }
    

        public function guardarEntradas() {

            $data = array_map( function($entrada) {

                return get_object_vars($entrada);

            }, $this->entradas );
            
            file_put_contents('blog.json', json_encode($data, JSON_PRETTY_PRINT));
        
        }

        public function agregarEntrada(Entrada $entrada) {
            return $this->entradas;
        }


        public function editarEntradas(Entrada $entrada) {
            return $this->entradas;
        }


        public function eliminarEntradas($id) {
       
            $this->entradas = array_filter( $this->entradas, function($entrada) use ($id) {
                return $entrada->id != $id; 
            });

            // echo "<pre>";
            // print_r($this->entradas);
            // echo "</pre>";

            $this->entradas = array_values($this->entradas);

            $this->guardarEntradas();
            
            return $this->entradas;
        }

        public function obtenerEntradas() {
            return $this->entradas;
        }

        public function moverEntrada($id, $direccion) {
            return $this->entradas;
        }
    }

    class EntradaDosColumnas extends Entrada {
        public $titulo1 = "";
        public $descripcion1 = "";
        public $titulo2 = "";
        public $descripcion2 = "";

        public function obtenerDetallesEspecificos(): string {

            return "Entrada de dos columnas: " .$titulo1. " ".$titulo2;

        }
    }

    class EntradaTresColumnas extends Entrada {
        public $titulo1 = "";
        public $descripcion1 = "";
        public $titulo2 = "";
        public $descripcion2 = "";
        public $titulo3 = "";
        public $descripcion3 = "";

        public function obtenerDetallesEspecificos(): string {

            return "Entrada de tres columnas: " .$titulo1. " ".$titulo2." ".$titulo3 ;

        }
    }

?>

