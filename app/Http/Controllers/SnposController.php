<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SnposImport;
use App\Imports\SnposRead;
use Maatwebsite\Excel\Excel;
use App\Models\SnposFile;
use Illuminate\Support\Facades\Auth;
use App\Models\Snpo;

class SnposController extends Controller
{

    public function criar(){
        return view('snpos');
    }
    
    public function importar(Request $request){

        $snpos = Snpo::where('snpos_file_id', $request->arquivo)->get();
        
        return view('snpos-import', ['snpos' => $snpos]);
    }

    protected $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function upload(Request $request)
    {
        $request->validate([
            'planilha' => 'required|mimes:xls,xlsx'
        ]);

        $planilha = $request->file('planilha');

        $id = Auth::id();

        $arquivo = SnposFile::create([
            'arquivo' => $planilha->getClientOriginalName(),
            'user_id' => $id,
        ]);

        // Importando o arquivo Excel
        $this->excel->import(new SnposImport(), $planilha);

        return redirect()->route('snpos.importar', ['arquivo' => $arquivo])->with('success', 'Planilha importada com sucesso.');
    }
}

