<?php

namespace App\Livewire\Pengumuman;

use App\Models\Pengumuman;
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
    public $pengumuman = [];
    public bool $isDisabled = false;

    #[Url(history: true)]
    public string $id = '';

    #[Url(history: true)]
    public string $menu = '';
    public $user;

    protected $rules = [
        'pengumuman.judul' => 'required',
    ];

    protected $messages = [
        'pengumuman.judul.required' => 'Judul tidak boleh kosong',
    ];

    public function mount(): void
    {
        $this->user = Auth::user();
        $this->loadPengumuman($this->id, $this->menu);
        
        $this->wilayah = Wilayah::query()->get();


        if (!$this->user->hasAnyPermission(['edit'])) {
            $this->isDisabled = true;
        }
        // if ($this->id != ''){
        //     $this->pengumuman = Pengumuman::query()->find($this->id)?->toArray();
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
            $this->redirectRoute('pengumuman');
            return;
        }
        $this->validate();

        try {
            DB::beginTransaction();

            Pengumuman::updateOrCreate(
                [
                    'id' => $this->pengumuman['id'] ?? null
                ],
                $this->pengumuman
            );

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::info('Error: ' . $e->getMessage());
            return;
        }

        $message = 'tambahkan data baru!';
        if (isset($this->pengumuman['id'])) {
            $message = 'ubah data!';
        }

        session()->flash('success', $message);
        $this->redirectRoute('pengumuman');
    }

    #[On('load-pengumuman')]
    public function loadPengumuman($id, $menu = 'view'): void
    {
        $this->menu = $menu;
        if ($this->id != '') {
            $this->pengumuman = Pengumuman::query()->withTrashed()->find($id)?->toArray();
        }

        if ($this->menu === 'view') $this->isDisabled = true;
    }

    public function render(): View
    {
        return view('livewire.pengumuman.form');
    }
}
