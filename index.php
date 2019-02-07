<?php

class auto {
    protected $kenteken;
    protected $bouwjaar;
    protected $model;
    protected $merk;
    protected $km;
    protected $prijs;

    public function __construct($kenteken, $bouwjaar, $model, $merk, $km, $prijs) // constructor shortkey = alt + insert
    {
        $this->kenteken = $kenteken;
        $this->bouwjaar = $bouwjaar;
        $this->model = $model;
        $this->merk = $merk;
        $this->km = $km;
        $this->prijs = $prijs;
    }

    /**
     * @return mixed
     */
    public function getKenteken()
    {
        return $this->kenteken;
    }

    /**
     * @return mixed
     */
    public function getBouwjaar()
    {
        return $this->bouwjaar;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getMerk()
    {
        return $this->merk;
    }

    /**
     * @return mixed
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * @return mixed
     */
    public function getPrijs()
    {
        return $this->prijs;
    }




}

class klant {
    protected $naam;
    protected $email;
    protected $tel;
    protected $adres;
    protected $kenteken;

    public function __construct($naam, $email, $tel, $adres, $kenteken) // constructor shortkey = alt + insert
    {
        $this->naam = $naam;
        $this->email = $email;
        $this->tel = $tel;
        $this->adres = $adres;
        $this->kenteken = $kenteken;
    }

}

$auto = new auto("123ABC", 2019, "V.3", "BMW", 102, 1000);

echo $auto->getKenteken();
echo '<br>';
echo $auto->getBouwjaar();
echo '<br>';
echo $auto->getModel();
echo '<br>';
echo $auto->getMerk();
echo '<br>';
echo $auto->getKm();
echo '<br>';
echo $auto->getPrijs();