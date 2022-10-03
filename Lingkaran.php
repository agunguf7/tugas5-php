<?php

require_once 'Bentuk2D.php';

class Lingkaran extends Bentuk2D
{

    public $jari2;

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }

    public function nameBidang()
    {
        return "Lingkaran";
    }

    public function luasBidang()
    {
        $luasLingkaran = 3.14 * $this->jari2 * $this->jari2;
        return $luasLingkaran;
    }

    public function kelBidang()
    {
        $kelLingkaran = 2 * 3.14 * $this->jari2;
        return $kelLingkaran;
    }

    public function keterangan()
    {
        return 'Jari-Jari = ' . $this->jari2 . ' Cm';
    }
}
