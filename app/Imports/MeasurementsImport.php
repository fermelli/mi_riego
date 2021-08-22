<?php

namespace App\Imports;

use App\Models\Measurement;
use Maatwebsite\Excel\Concerns\ToModel;

class MeasurementsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Measurement([
            'soil_moisture'                     => $row[0],
            'relative_humidity'                 => $row[1],
            'temperature_in_degrees_centigrade' => $row[2],
            'temperature_in_degrees_fahrenheit' => $row[3],
            'timestamp'                         => $row[4],
        ]);
    }
}
