<?php


class Matiere
{
    private $idMat;
    private $nomMat;

    /**
     * Matiere constructor.
     * @param $idMat
     * @param $nomMat
     */
    public function __construct($idMat, $nomMat)
    {
        $this->idMat = $idMat;
        $this->nomMat = $nomMat;
    }

    /**
     * @return mixed
     */
    public function getIdMat()
    {
        return $this->idMat;
    }

    /**
     * @param mixed $idMat
     */
    public function setIdMat($idMat)
    {
        $this->idMat = $idMat;
    }

    /**
     * @return mixed
     */
    public function getNomMat()
    {
        return $this->nomMat;
    }

    /**
     * @param mixed $nomMat
     */
    public function setNomMat($nomMat)
    {
        $this->nomMat = $nomMat;
    }


}