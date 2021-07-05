<?php

namespace App\Http\Livewire;
use App\Models\Pegawai;
use Livewire\Component;

class CreatePegawai extends Component
{
    public $selected_id;
    public $nama_pegawai;
    public $pegawai;
    public $alamat;
    public $no_telp;
    public $updateMode = false;
    public $isOpen = false;
    public function render()
    {
        $this->pegawai = Pegawai::all();
        return view('livewire.create-pegawai');
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
        $this->nama_pegawai = "";
        $this->alamat = "";
        $this->no_telp = "";
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

        $this->closeModal();
        session()->flash('message', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $record = Pegawai::findOrFail($id);
        $this->selected_id = $id;
        $this->nama_pegawai = $record->nama_pegawai;
        $this->alamat = $record->alamat;
        $this->no_telp = $record->no_telp;
      
        $this->updateMode = true;
        $this->openModal();
    }

    public function update()
    {
        $this->validate([
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Pegawai::find($this->selected_id);
            $record->update([
                'nama_pegawai' => $this->nama_pegawai,
                'alamat' => $this->alamat,
                'no_telp' => $this->no_telp,
            ]);

            $this->closeModal();
            session()->flash('message', 'Data berhasil di update');
        }
    }

    public function delete($id)
    {
        if ($id) {
            Pegawai::find($id)->delete();
            session()->flash('message', 'Data berhasil dihapus');
        }

        if ($this->updateMode) {
            $this->resetInput();
            $this->updateMode = false;
        }
    }
}
