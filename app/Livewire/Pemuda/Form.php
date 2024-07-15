<?php

namespace App\Livewire\Pemuda;

use App\Models\Pemuda;
use App\Models\JenisKelamin;
use App\Models\Gereja;
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
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $pemuda = [];
    public $jenisKelamin;
    public $gereja;
    public bool $isDisabled = false;

    #[Url(history: true)]
    public string $id = '';

    #[Url(history: true)]
    public string $menu = '';
    public $user;

    protected $rules = [
        'pemuda.nama_depan' => 'required',
        'pemuda.nama_tengah' => 'nullable',
        'pemuda.nama_belakang' => 'nullable',
        'pemuda.jenis_kelamin' => 'nullable',
        'pemuda.tempat_tanggal_lahir' => 'nullable',
        'pemuda.nomor_hp' => 'nullable',
        'pemuda.usia' => 'nullable',
        'pemuda.alamat' => 'nullable',
    ];

    protected $messages = [
        'pemuda.nama_depan.required' => 'Nama nama depan tidak boleh kosong',
    ];

    public function mount(): void
    {
        $this->user = Auth::user();
        $this->loadpemuda($this->id, $this->menu);
        
        $this->jenisKelamin = JenisKelamin::query()->get();
        $this->gereja = Gereja::query()->get();


        if (!$this->user->hasAnyPermission(['edit'])) {
            $this->isDisabled = true;
        }
        // if ($this->id != ''){
        //     $this->pemuda = Pemuda::query()->find($this->id)?->toArray();
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
            $this->redirectRoute('pemuda');
            return;
        }
        $this->validate();

        try {
            DB::beginTransaction();

            if (isset($this->pemuda['foto']) && $this->pemuda['foto'] != '' && !is_string($this->pemuda['foto'])) {
                $this->pemuda['foto'] =  $this->uploadFile('foto_',$this->pemuda['foto']);
            }

            // dd($this->pemuda['foto']);

            Pemuda::updateOrCreate(
                [
                    'id' => $this->pemuda['id'] ?? null
                ],
                $this->pemuda
            );

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::info('Error: ' . $e->getMessage());
            return;
        }

        $message = 'tambahkan data baru!';
        if (isset($this->pemuda['id'])) {
            $message = 'ubah data!';
        }

        session()->flash('success', $message);
        $this->redirectRoute('pemuda');
    }

    #[On('load-pemuda')]
    public function loadPemuda($id, $menu = 'view'): void
    {
        $this->menu = $menu;
        if ($this->id != '') {
            $this->pemuda = Pemuda::query()->withTrashed()->find($id)?->toArray();
        }

        if ($this->menu === 'view') $this->isDisabled = true;
    }

    private function fileChecking(): void
    {
        if(isset($this->pemuda['foto']) && is_string($this->pemuda['foto'])){
            $this->rules['pemuda.foto'] = 'nullable';
        }
    }


    private function microtime_float(): float
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

    private function uploadFile($fileName, $file): string
    {
        $fileName = $fileName. '_'.$this->microtime_float().'.'.$file->extension();
        $file->storeAs('public/foto', $fileName);
        return 'foto/'.$fileName;
    }

    #[On('delete-file')]
    public function deleteFile($foto):void
    {
        $pathFile = storage_path('app/public/foto/' . $this->pemuda[$foto] ?? '');
        if (file_exists($pathFile)) unlink($pathFile);
        $this->pemuda[$foto] = '';
        Pemuda::updateOrCreate(
            [
                'id' => $this->pemuda['id'] ?? null
            ],
            $this->pemuda
        );
    }

    public function render(): View
    {
        return view('livewire.pemuda.form');
    }
}
