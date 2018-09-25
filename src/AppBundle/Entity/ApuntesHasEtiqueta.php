<?php

namespace AppBundle\Entity;

/**
 * ApuntesHasEtiqueta
 */
class ApuntesHasEtiqueta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $apuntesId;

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
     * Set apuntesId
     *
     * @param integer $apuntesId
     *
     * @return ApuntesHasEtiqueta
     */
    public function setApuntesId($apuntesId)
    {
        $this->apuntesId = $apuntesId;

        return $this;
    }

    /**
     * Get apuntesId
     *
     * @return integer
     */
    public function getApuntesId()
    {
        return $this->apuntesId;
    }

    /**
     * Set etiquetaId
     *
     * @param integer $etiquetaId
     *
     * @return ApuntesHasEtiqueta
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

