<?php

namespace App\Livewire;

use App\Models\Wilayah;
use App\Models\Gereja;
use App\Models\Pemuda;
use App\Models\JenisKelamin;

use Illuminate\View\View;
use Livewire\Component;

class Dasbor extends Component
{

    public $jenisKelamin = [];
    public $wilayah = [];
    public $gereja = [];
    public $pemuda = [];

    // total
    public $totalWilayah = 0;
    public $totalGereja = 0;
    public $totalPemuda = 0;

    public function mount(): void
    {
        // totalWilayah
        $this->totalWilayah = Wilayah::query()
                    // ->where('is_asn', '=', true)
                    ->where('published_at', '!=', null)
                    ->count();

        // totalGereja
        $this->totalGereja = Gereja::query()
                    // ->where('is_asn', '=', true)
                    ->where('published_at', '!=', null)
                    ->count();

        // totalPemuda
        $this->totalPemuda = Pemuda::query()
                    // ->where('is_asn', '=', true)
                    ->where('published_at', '!=', null)
                    ->count();
        
        // JenisKelamin::with('pemuda')->each(function ($jenisKelamin){
        //     $this->jenisKelamins[] = ['name' => $jenisKelamin->jenis_kelamin, 'data' => [$jenisKelamin->pemuda->count()] ];
        // });
        // $this->statusPegawai = [
        //     ['name' => 'ASN', 'data' => [Pegawai::query()->where('is_asn', '=', true)->count()]],
        //     ['name' => 'NON ASN', 'data' => [Pegawai::query()->where('is_asn', '=', false)->count()]],
        // ];
        
        // $this->bidangs = json_encode($this->bidangs);
        // $this->jenisKelamins = json_encode($this->jenisKelamins);
        // $this->statusPegawai = json_encode($this->statusPegawai);
        // $this->lokasi = json_encode($this->lokasi);
        // $this->suku = json_encode($this->suku);
    }

    public function render(): View
    {
        return view('livewire.dasbor');
    }
}
