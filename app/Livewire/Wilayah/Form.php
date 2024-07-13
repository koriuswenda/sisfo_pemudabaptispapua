<?php

namespace App\Livewire\Wilayah;

use App\Models\Wilayah;
use App\Models\JenisKelamin;
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
    public $wilayah = [];
    public bool $isDisabled = false;

    #[Url(history: true)]
    public string $id = '';

    #[Url(history: true)]
    public string $menu = '';
    public $user;

    protected $rules = [
        'wilayah.nama_wilayah' => 'required',
        'wilayah.kode_wilayah' => 'nullable',
        'wilayah.keterangan' => 'nullable',
    ];

    protected $messages = [
        'wilayah.nama_wilayah.required' => 'Nama wilayah tidak boleh kosong',
    ];

    public function mount(): void
    {
        $this->user = Auth::user();
        $this->loadwilayah($this->id, $this->menu);
        
        $this->jenisKelamin = JenisKelamin::query()->get();


        if (!$this->user->hasAnyPermission(['edit'])) {
            $this->isDisabled = true;
        }
        // if ($this->id != ''){
        //     $this->wilayah = Wilayah::query()->find($this->id)?->toArray();
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
            $this->redirectRoute('wilayah');
            return;
        }
        $this->validate();

        try {
            DB::beginTransaction();

            Wilayah::updateOrCreate(
                [
                    'id' => $this->wilayah['id'] ?? null
                ],
                $this->wilayah
            );

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::info('Error: ' . $e->getMessage());
            return;
        }

        $message = 'tambahkan data baru!';
        if (isset($this->wilayah['id'])) {
            $message = 'ubah data!';
        }

        session()->flash('success', $message);
        $this->redirectRoute('wilayah');
    }

    #[On('load-wilayah')]
    public function loadWilayah($id, $menu = 'view'): void
    {
        $this->menu = $menu;
        if ($this->id != '') {
            $this->wilayah = Wilayah::query()->withTrashed()->find($id)?->toArray();
        }

        if ($this->menu === 'view') $this->isDisabled = true;
    }

    public function render(): View
    {
        return view('livewire.wilayah.form');
    }
}
