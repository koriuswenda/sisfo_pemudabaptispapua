<?php

namespace App\Livewire\Pemuda;

use Livewire\Component;
use App\Models\Pemuda;
use Illuminate\Support\Carbon;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Record extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public ?string $menu = '';

    #[Url]
    public $page;

    #[Url(history: true)]
    public ?string $search = '';

    public int $totalAll = 0;
    public int $totalPublik = 0;
    public int $totalKonsep = 0;
    public int $totalTempatSampah = 0;
    public $id;
    public $paginate = 10;
    public $listPaginate = [5,10,25,50,100];
    public bool $isAsn = true;

    public function action($menu): void
    {
        $this->paginators['page'] = 1;
        $this->page = 1;
        $this->menu = $menu;
    }

    public function publishOrDraft($id): void
    {
        $record = Pemuda::query()->withTrashed()->find($id);
        $type = 'publik';
        if($record->published_at == null){
            $record->published_at = Carbon::now();
        }else{
            $record->published_at = null;
            $type = 'konsep';
        }
        $record->deleted_at = null;
        $record->save();
        session()->flash('success', 'Data diubah menjadi '.$type);
    }

    public function undo($id): void
    {
        $record = Pemuda::query()->withTrashed()->whereNotNull('deleted_at')->find($id);
        $record->deleted_at = null;
        $record->save();
        session()->flash('success', 'Data berhasil dikembalikan!');
    }

    public function delete($id): void
    {
        $record = Pemuda::query()->withTrashed()->whereNotNull('deleted_at')->find($id);
        if(isset($record->deleted_at)){
            $record->user?->forceDelete();
            $record->forceDelete();
            session()->flash('success', 'Data berhasil dihapus permanen');
            return;
        }
        $record = Pemuda::query()->find($id);
        $record->published_at = null;
        $record->save();
        $record->delete();
        session()->flash('success', 'Data berhasil dihapus sementara');
    }

    public function modal($id): void
    {
        $this->id = $id;
    }

    public function changePaginate($value):void
    {
        $this->paginate = $value;
    }

    public function render(): View
    {
        $this->totalAll = Pemuda::query()->count();
        $this->totalPublik = Pemuda::query()->published()->count();
        $this->totalKonsep = Pemuda::query()->draft()->count();
        $this->totalTempatSampah = Pemuda::query()->withTrashed()->whereNotNull('deleted_at')->count();
        $query = Pemuda::query()
            ->when(strlen($this->search) > 2, function ($query) {
                $query
                    ->where(function ($query) {
                        $query
                            ->where('nama_depan', 'like', '%' . $this->search . '%')
                            ->orWhere('nama_tengah', 'like', '%' . $this->search . '%')
                            ->orWhere('nama_belakang', 'like', '%' . $this->search . '%')
                            ->orWhereHas('jenisKelamin', fn ($query) => $query->where('jenis_kelamin', 'like', '%' . $this->search . '%'));
                    });
            });
        
        if ($this->menu === '') {
            $records = $query->withTrashed()->paginate($this->paginate)->withQueryString();
        } elseif($this->menu === 'publik'){
            $records = $query->published()->paginate($this->paginate)->withQueryString();
        } elseif($this->menu === 'konsep'){
            $records = $query->draft()->paginate($this->paginate)->withQueryString();
        } elseif($this->menu === 'tempat_sampah'){
            $records = $query->withTrashed()->whereNotNull('deleted_at')->paginate($this->paginate)->withQueryString();
        }
        
        return view('livewire.pemuda.record', ['records' => $records]);
        
    }
}
