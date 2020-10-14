<?php

class Bdd
{
    private $ip;
    private $identifiant;
    private $mtps;

    public function __construct($prmIp, $prmIdentifiant, $prmMtps){
        $this->ip = $prmIp;
        $this->identifiant = $prmIdentifiant;
        $this->mtps = $prmMtps;
    }

    public function condb($prmdb){
        mysql_connect($this->ip,$this->identifiant,$this->mtps);
        mysql_select_db($prmdb);
    }
    public function requete($prmSignature){
        return $requete = mysql_query($prmSignature);
        mysql_close();
    }







    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }
    /**
     * @return string
     */
    public function getMtps()
    {
        return $this->mtps;
    }

}

?>