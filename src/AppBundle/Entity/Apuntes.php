<?php

namespace AppBundle\Entity;

/**
 * Apuntes
 */
class Apuntes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $precio;

    /**
     * @var string
     */
    private $imagenes;

    /**
     * @var \DateTime
     */
    private $fechaPublicacion;

    /**
     * @var string
     */
    private $temas;

    /**
     * @var integer
     */
    private $usuarioId;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Apuntes
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Apuntes
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set imagenes
     *
     * @param string $imagenes
     *
     * @return Apuntes
     */
    public function setImagenes($imagenes)
    {
        $this->imagenes = $imagenes;

        return $this;
    }

    /**
     * Get imagenes
     *
     * @return string
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }

    /**
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     *
     * @return Apuntes
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set temas
     *
     * @param string $temas
     *
     * @return Apuntes
     */
    public function setTemas($temas)
    {
        $this->temas = $temas;

        return $this;
    }

    /**
     * Get temas
     *
     * @return string
     */
    public function getTemas()
    {
        return $this->temas;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Apuntes
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }
}

