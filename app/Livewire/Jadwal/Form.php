<?php

namespace App\Livewire\Jadwal;

use App\Models\Jadwal;
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
    public $jadwal = [];
    public $wilayah;
    public bool $isDisabled = false;

    #[Url(history: true)]
    public string $id = '';

    #[Url(history: true)]
    public string $menu = '';
    public $user;

    protected $rules = [
        'jadwal.judul' => 'required',
    ];

    protected $messages = [
        'jadwal.judul.required' => 'Nama jadwal tidak boleh kosong',
    ];

    public function mount(): void
    {
        $this->user = Auth::user();
        $this->loadJadwal($this->id, $this->menu);
        
        $this->wilayah = Wilayah::query()->get();


        if (!$this->user->hasAnyPermission(['edit'])) {
            $this->isDisabled = true;
        }
        // if ($this->id != ''){
        //     $this->jadwal = Jadwal::query()->find($this->id)?->toArray();
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
            $this->redirectRoute('jadwal');
            return;
        }
        $this->validate();

        try {
            DB::beginTransaction();

            Jadwal::updateOrCreate(
                [
                    'id' => $this->jadwal['id'] ?? null
                ],
                $this->jadwal
            );

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::info('Error: ' . $e->getMessage());
            return;
        }

        $message = 'tambahkan data baru!';
        if (isset($this->jadwal['id'])) {
            $message = 'ubah data!';
        }

        session()->flash('success', $message);
        $this->redirectRoute('jadwal');
    }

    #[On('load-jadwal')]
    public function loadJadwal($id, $menu = 'view'): void
    {
        $this->menu = $menu;
        if ($this->id != '') {
            $this->jadwal = Jadwal::query()->withTrashed()->find($id)?->toArray();
        }

        if ($this->menu === 'view') $this->isDisabled = true;
    }

    public function render(): View
    {
        return view('livewire.jadwal.form');
    }
}
