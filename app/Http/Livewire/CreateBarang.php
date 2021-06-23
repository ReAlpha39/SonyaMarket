<?php

namespace App\Http\Livewire;

use App\Models\Barang;

use Livewire\Component;

class CreateBarang extends Component
{
    public $selected_id;
    public $barang;
    public $nama_barang;
    public $jumlah_barang;
    public $tgl_masuk;
    public $tgl_kadaluarsa;
    public $harga;
    public $kategori;
    public $updateMode = false;
    public $isOpen = false;

    public function render()
    {
        $this->barang = Barang::all();
        return view('livewire.create-barang');
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->resetInput();
        $this->updateMode = false;
        $this->isOpen = false;
    }

    private function resetInput()
    {
        $this->nama_barang = "";
        $this->jumlah_barang = "";
        $this->tgl_masuk = "";
        $this->tgl_kadaluarsa = "";
        $this->harga = "";
        $this->kategori = "";
    }

    public function createBarang()
    {
        Barang::create([
            'nama_barang' => $this->nama_barang,
            'jumlah_barang' => $this->jumlah_barang,
            'tgl_masuk' => $this->tgl_masuk,
            'tgl_kadaluarsa' => $this->tgl_kadaluarsa,
            'harga' => $this->harga,
            'kategori' => $this->kategori
        ]);

        $this->closeModal();
        session()->flash('message', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $record = Barang::findOrFail($id);
        $this->selected_id = $id;
        $this->nama_barang = $record->nim;
        $this->jumlah_barang = $record->nama;
        $this->alamat = $record->alamat;

        $this->nama_barang = $record->nama_barang;
        $this->jumlah_barang = $record->jumlah_barang;
        $this->tgl_masuk = $record->tgl_masuk;
        $this->tgl_kadaluarsa = $record->tgl_kadaluarsa;
        $this->harga = $record->harga;
        $this->kategor = $record->kategor;

        $this->updateMode = true;
        $this->openModal();
    }

    public function update()
    {
        $this->validate([
            'jumlah_barang' => 'required',
            'jumlah_barang' => 'required',
            'tgl_masuk' => 'required',
            'tgl_kadaluarsa' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Barang::find($this->selected_id);
            $record->update([
                'jumlah_barang' => $this->jumlah_barang,
                'jumlah_barang' => $this->jumlah_barang,
                'tgl_masuk' => $this->tgl_masuk,
                'tgl_kadaluarsa' => $this->tgl_kadaluarsa,
                'harga' => $this->harga,
                'kategori' => $this->kategori,
            ]);

            $this->closeModal();
            session()->flash('message', 'Data berhasil di update');
        }
    }

    public function delete($id)
    {
        if ($id) {
            Barang::find($id)->delete();
            session()->flash('message', 'Data berhasil dihapus');
        }

        if ($this->updateMode) {
            $this->resetInput();
            $this->updateMode = false;
        }
    }
}
