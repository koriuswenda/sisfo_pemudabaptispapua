<?php

namespace App\Livewire\Gereja;

use App\Models\Gereja;
use App\Models\Wilayah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Exception;

class Form extends Component
{
    public $gereja = [];
    public $wilayah;
    public bool $isDisabled = false;

    #[Url(history: true)]
    public string $id = '';

    #[Url(history: true)]
    public string $menu = '';
    public $user;

    protected $rules = [
        'gereja.nama_gereja' => 'required',
        'gereja.wilayah_id' => 'required',
        'gereja.nama_pengguna' => 'required|alpha_dash:ascii',
        'gereja.kata_sandi' => 'required',
    ];

    protected $messages = [
        'gereja.nama_gereja.required' => 'Nama gereja tidak boleh kosong',
        'gereja.wilayah_id.required' => 'Wilayah wajib dilengkapi',
        'gereja.nama_pengguna.alpha_dash' => 'Nama Pengguna tidak sesuai format',
        'gereja.kata_sandi.required' => 'Kata Sandi wajib dilengkapi',
    ];

    public function mount(): void
    {
        $this->user = Auth::user();
        $this->loadgereja($this->id, $this->menu);
        
        $this->wilayah = Wilayah::query()->get();


        if (!$this->user->hasAnyPermission(['edit'])) {
            $this->isDisabled = true;
        }
        // if ($this->id != ''){
        //     $this->gereja = Gereja::query()->find($this->id)?->toArray();
        // }
    }

    #[On('refresh')]
    public function refreshIsDisabled($isDisabled): void
    {
        $this->isDisabled = $isDisabled;
    }

    public function save(): void
    {
        if (!$this->user->hasAnyPermission(['edit'])) {
            session()->flash('error', 'Maaf anda tidak memiliki hak akses!');
            $this->redirectRoute('gereja');
            return;
        }
        $this->validate();

        try {
            DB::beginTransaction();

            
            $this->gereja['kata_sandi'] = Hash::make($this->gereja['kata_sandi']);

            Gereja::updateOrCreate(
                [
                    'id' => $this->gereja['id'] ?? null
                ],
                $this->gereja
            );

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::info('Error: ' . $e->getMessage());
            return;
        }

        $message = 'tambahkan data baru!';
        if (isset($this->gereja['id'])) {
            $message = 'ubah data!';
        }

        session()->flash('success', $message);
        $this->redirectRoute('gereja');
    }

    #[On('load-gereja')]
    public function loadGereja($id, $menu = 'view'): void
    {
        $this->menu = $menu;
        if ($this->id != '') {
            $this->gereja = Gereja::query()->withTrashed()->find($id)?->toArray();
        }

        if ($this->menu === 'view') $this->isDisabled = true;
    }

    public function render(): View
    {
        return view('livewire.gereja.form');
    }
}
