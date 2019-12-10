<?php


namespace App;


class Contactanos
{
    private $nombre;
    private $apellido;
    private $telefono_celular;
    private $email;
    private $mensaje;

    /**
     * Contactanos constructor.
     * @param $nombre
     * @param $apellido
     * @param $telefono_celular
     * @param $email
     * @param $mensaje
     */
    public function __construct($nombre, $apellido, $telefono_celular, $email, $mensaje)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono_celular = $telefono_celular;
        $this->email = $email;
        $this->mensaje = $mensaje;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * @return mixed
     */
    public function getTelefonoCelular()
    {
        return $this->telefono_celular;
    }
}
