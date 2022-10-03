<?php

require_once 'Bentuk2D.php';

class PersegiPanjang extends Bentuk2D
{

    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->p = $panjang;
        $this->l = $lebar;
    }

    public function nameBidang()
    {
        return "Persegi Panjang";
    }

    public function luasBidang()
    {
        $luas = $this->p * $this->l;
        return $luas;
    }

    public function kelBidang()
    {
        $keliling = 2 * ($this->p + $this->l);
        return $keliling;
    }

    public function keterangan()
    {
        echo 'Panjang = ' . $this->p . ' cm';
        echo '<br> Lebar = ' . $this->l . ' cm';
    }
}
