<?php

namespace App\Http\Livewire;
use App\Models\Barang;

use Livewire\Component;

class CreateBarang extends Component
{
    public $nama_barang;
    public $jumlah_barang;
    public $tgl_masuk;
    public $tgl_kadaluarsa;
    public $harga;
    public $kategori;

    public function render()
    {
        return view('livewire.create-barang');
    }

    public function createBarang()
    {
        Barang::create([
            'nama_barang' => $this -> nama_barang,
            'jumlah_barang' => $this->jumlah_barang,
            'tgl_masuk' => $this->tgl_masuk,
            'tgl_kadaluarsa' => $this->tgl_kadaluarsa,
            'harga' => $this->harga,
            'kategori' => $this->kategori
        ]);

        $this -> nama_barang = "";
        $this->jumlah_barang = "";
        $this->tgl_masuk = "";
        $this->tgl_kadaluarsa = "";
        $this->harga = "";
        $this->kategori = "";

    }
}
