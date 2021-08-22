<?php

namespace App\Imports;

use App\Models\Humidity;
use Maatwebsite\Excel\Concerns\ToModel;

class HumiditiesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Humidity([
            'value'     => $row[0],
            'timestamp' => $row[1],
        ]);
    }
}
