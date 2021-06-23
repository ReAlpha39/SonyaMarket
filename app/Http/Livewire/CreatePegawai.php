<?php

namespace App\Http\Livewire;
use App\Models\Pegawai;
use Livewire\Component;

class CreatePegawai extends Component
{
    public $nama_pegawai;
    public $alamat;
    public $no_telp;
    public function render()
    {
        return view('livewire.create-pegawai');
    }

    public function createPegawai()
    {
        Pegawai::create([
            'nama_pegawai' =>  $this->nama_pegawai,
            'alamat' => $this->alamat,
            'no_telp' => $this->no_telp
        ]);

        $this->nama_pegawai ="";
        $this->alamat ="";
        $this->no_telp="";
    }
}
