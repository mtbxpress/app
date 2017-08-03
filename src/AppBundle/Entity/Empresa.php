<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmpresaRepository")
 */
class Empresa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreEmpresa", type="string", length=256)
     */
    private $nombreEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudadEmpresa", type="string", length=256)
     */
    private $ciudadEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarioEmpresa", type="string", length=556)
     */
    private $comentarioEmpresa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInsercion", type="datetime")
     */
    private $fechaInsercion;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreEmpresa
     *
     * @param string $nombreEmpresa
     *
     * @return Empresa
     */
    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;

        return $this;
    }

    /**
     * Get nombreEmpresa
     *
     * @return string
     */
    public function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    /**
     * Set ciudadEmpresa
     *
     * @param string $ciudadEmpresa
     *
     * @return Empresa
     */
    public function setCiudadEmpresa($ciudadEmpresa)
    {
        $this->ciudadEmpresa = $ciudadEmpresa;

        return $this;
    }

    /**
     * Get ciudadEmpresa
     *
     * @return string
     */
    public function getCiudadEmpresa()
    {
        return $this->ciudadEmpresa;
    }

    /**
     * Set fechaInsercion
     *
     * @param \DateTime $fechaInsercion
     *
     * @return Empresa
     */
    public function setFechaInsercion($fechaInsercion)
    {
        $this->fechaInsercion = $fechaInsercion;

        return $this;
    }

    /**
     * Get fechaInsercion
     *
     * @return \DateTime
     */
    public function getFechaInsercion()
    {
        return $this->fechaInsercion;
    }

    /**
     * Set comentarioEmpresa
     *
     * @param string $comentarioEmpresa
     *
     * @return Empresa
     */
    public function setComentarioEmpresa($comentarioEmpresa)
    {
        $this->comentarioEmpresa = $comentarioEmpresa;

        return $this;
    }

    /**
     * Get comentarioEmpresa
     *
     * @return string
     */
    public function getComentarioEmpresa()
    {
        return $this->comentarioEmpresa;
    }
}
