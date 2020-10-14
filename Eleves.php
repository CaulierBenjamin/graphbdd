<?php
class Eleves
{
    private $idElv;
    private $nomElv;
    private $prenomElv;
    private $idClasse;

    /**
     * Eleves constructor.
     * @param $idElv
     * @param $nomElv
     * @param $prenomElv
     * @param $idClasse
     */
    public function __construct($idElv, $nomElv, $prenomElv, $idClasse)
    {
        $this->idElv = $idElv;
        $this->nomElv = $nomElv;
        $this->prenomElv = $prenomElv;
        $this->idClasse = $idClasse;
    }

    /**
     * @return mixed
     */
    public function getIdElv()
    {
        return $this->idElv;
    }

    /**
     * @return mixed
     */
    public function getNomElv()
    {
        return $this->nomElv;
    }

    /**
     * @return mixed
     */
    public function getPrenomElv()
    {
        return $this->prenomElv;
    }

    /**
     * @return mixed
     */
    public function getIdClasse()
    {
        return $this->idClasse;
    }


}