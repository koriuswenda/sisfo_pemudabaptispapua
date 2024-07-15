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
    public $pemudaLakiLaki = [];
    public $pemudaPerempuan = [];

    // total
    public $totalWilayah = 0;
    public $totalGereja = 0;
    public $totalPemuda = 0;
    public $totalPemudaLakiLaki = 0;
    public $totalPemudaPerempuan = 0;

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

        // totalPemudaLakiLaki
        $this->totalPemudaLakiLaki = Pemuda::query()
                    ->where('jenis_kelamin_id', '=', 1)
                    ->where('published_at', '!=', null)
                    ->count();

        // totalPemudaPerempuan
        $this->totalPemudaPerempuan = Pemuda::query()
                    ->where('jenis_kelamin_id', '=', 2)
                    ->where('published_at', '!=', null)
                    ->count();
    }

    public function render(): View
    {
        return view('livewire.dasbor');
    }
}
