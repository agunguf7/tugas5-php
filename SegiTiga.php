<?php

require_once 'Bentuk2D.php';

class SegiTiga extends Bentuk2D
{
    public $alas;
    public $tinggi;
    public $sisiMiring;

    public function __construct($alas, $tinggi, $sisiMiring)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisiMiring;
    }

    public function nameBidang()
    {
        return "Segitiga";
    }
    public function luasBidang()
    {
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function  kelBidang()
    {
        $keliling = $this->sisi + $this->sisi + $this->sisi;
        return $keliling;
    }

    public function keterangan()
    {
        return ' Alas = ' . $this->alas . ' cm <br/>  Tinggi = ' . $this->tinggi . ' cm <br/>  Sisi Miring =' . $this->sisi . ' cm';
    }
}
