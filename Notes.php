<?php
class Notes
{
    private $idElv;
    private $idMat;
    private $note;

    /**
     * Notes constructor.
     * @param $idElv
     * @param $idMat
     * @param $note
     */
    public function __construct($idElv, $idMat, $note)
    {
        $this->idElv = $idElv;
        $this->idMat = $idMat;
        $this->note = $note;
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
    public function getIdMat()
    {
        return $this->idMat;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }


}