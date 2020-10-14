<?php


class Classe
{
    private $idClasse;
    private $nomClasse;

    /**
     * Classe constructor.
     * @param $idClasse
     * @param $nomClasse
     */
    public function __construct($idClasse, $nomClasse)
    {
        $this->idClasse = $idClasse;
        $this->nomClasse = $nomClasse;
    }

    /**
     * @return mixed
     */
    public function getIdClasse()
    {
        return $this->idClasse;
    }

    /**
     * @return mixed
     */
    public function getNomClasse()
    {
        return $this->nomClasse;
    }


}