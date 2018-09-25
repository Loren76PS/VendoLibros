<?php

namespace AppBundle\Entity;

/**
 * LibroHasEtiqueta
 */
class LibroHasEtiqueta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $libroId;

    /**
     * @var integer
     */
    private $etiquetaId;


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
     * Set libroId
     *
     * @param integer $libroId
     *
     * @return LibroHasEtiqueta
     */
    public function setLibroId($libroId)
    {
        $this->libroId = $libroId;

        return $this;
    }

    /**
     * Get libroId
     *
     * @return integer
     */
    public function getLibroId()
    {
        return $this->libroId;
    }

    /**
     * Set etiquetaId
     *
     * @param integer $etiquetaId
     *
     * @return LibroHasEtiqueta
     */
    public function setEtiquetaId($etiquetaId)
    {
        $this->etiquetaId = $etiquetaId;

        return $this;
    }

    /**
     * Get etiquetaId
     *
     * @return integer
     */
    public function getEtiquetaId()
    {
        return $this->etiquetaId;
    }
}

