<?php

namespace App\Imports;

use App\Models\Snpo;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\SnposFile;
use Illuminate\Support\Facades\Auth;

class SnposImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        $ultimoSnposFile = SnposFile::latest('id')->first();

        foreach ($rows as $row) 
        {
            if (!empty($row[0]) && !is_null($row[0])) {
                $ultimoSnposFile->snpos()->create([
                    'snpos' => $row[0],
                    'bruto' => '122.90',
                    'liquido' => '122.90'
                ]);
            }
        }
    }
}
