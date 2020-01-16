<?php
    // BASES DE PROGRAMACION ORIENTADA
    // A OBJETOS

    class Persona{

        // Declar las variables que utilizará la clase
        public $nombre;
        public $apellido;
        public $edad;

        // Inicializar el constructor
        // Inicia las variables (atributos) de la clase
        // Para que puedan er utilizadas en el momento de realizar
        // una instancia
        public function __construct($nombre, $apellido, $edad){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
        }

        // Un método es una función propia de una clase
        public function saludar(){
            echo "Hola, soy $this->nombre $this->apellido y tengo $this->edad años";
        }
    }

    // Se realiza la instancia con el nombre de la clase en minúscula
    $persona = new Persona('Kamilo', 'Munevar', '28');
    $persona->saludar();

    /*
        1) A través de POO vamos a crear la receta de un desayuno

        JUEVES 16 ENERO
            git y github
            conexión a BD MySQL
            CRUD básico -> Programación Orientada a Procedimientos

        VIERNES 17 ENERO
            MVC aplicado a PHP + MySQL
            Login
            Validaciones
            $_SESSION[]** si nos da tiempo
            $_COOKIE[]** si nos da tiempo
    */

































?>










