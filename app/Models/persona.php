<?php

class Persona
{
    //Propiedades de la Clase
    protected string $nombres; //Nombre de las personas
    protected string $apellidos; //Apellidos de las Personas
    protected string $direccion; //Dirección de vivienda
    protected float $telefono; //Telefono de la persona
    protected string $correo; //Correo de la Persona

    //Metodos
    ///

    /**
     * Persona constructor.
     * @param string $nombres
     * @param string $apellidos
     * @param string $direccion
     */

    //Metodo Constructor
    public function __construct($nombres = "Pepito", $apellidos = "Perez", $direccion = "Sogamoso crr 14")
    {
        $this->setNombres($nombres);
        $this->setApellidos($apellidos);
        $this->setDireccion($direccion);
    }
    //Metodo Destructor
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    /**
     * @return string
     */
    //Metodo String

    public function __toString()
    {
     return "<strong> Nombre: </strong> " .$this->getnombres()."<br/>".
            "<strong> Apellidos: </strong> " .$this->getApellidos()."<br/>".
            "<strong> Dirección: </strong> " .$this->getDireccion()."<br/>".
            "<strong> Telefono: </strong> " .$this->getTelefono()."<br/>".
            "<strong> correo: </strong> " .$this->getCorreo(). "<br/>";
    }


    //setters and Getters

    public function getNombres(): string
    {
        return $this->nombres;
    }

    /**
     * @param string $nombres
     */
    public function setNombres(string $nombres): void
    {
        $this->nombres = $nombres;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     */
    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return string
     */
    public function getDireccion(): string
    {
        return $this->direccion;
    }

    /**
     * @param string $direccion
     */
    public function setDireccion(string $direccion): void
    {
        $this->direccion = $direccion;
    }

    /**
     * @return float
     */
    public function getTelefono(): float
    {
        return $this->telefono;
    }

    /**
     * @param float $telefono
     */
    public function setTelefono(float $telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return string
     */
    public function getCorreo(): string
    {
        return $this->correo;
    }

    /**
     * @param string $correo
     */
    public function setCorreo(string $correo): void
    {
        $this->correo = $correo;
    }


}
