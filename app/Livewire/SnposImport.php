<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Snpo;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;

class SnposImport extends Component
{
    use WithFileUploads;
    
    public $planilha;

    public function save()
    { 
        // $this->validate([
        //     'planilha' => 'mimes:xls,xlsx', // 1MB Max
        // ]);

        // Snpo::create([
        //     'snpos' => 'wf',
        //     'nome' => 'London to Paris',
        //     'bruto' => '102.98',
        //     'liquido' => '102.98'
        // ]);

        // $name = $this->planilha->getClientOriginalName();
        // $this->planilha->storeAs('snpos', $name, 'public');

        $response = Http::attach('planilha', $this->planilha->getRealPath(), $this->planilha->getClientOriginalName())->post(route('importar.planilha'));
    }

    // public function render()
    // {
    //     return view('livewire.import-cnpos');
    // }
}
