<?php



// app/Exports/ParkingExport.php

// app/Exports/ParkingExport.php

namespace App\Exports;


use App\Models\parkir;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class ParkingExport implements FromCollection
{
    use Exportable;

    public function collection()
    {
        // Retrieve the data you want to export
        $parkingRecords = parkir::all(['id', 'code', 'police_number', 'entry_time', 'exit_time']);

        // Transform the data for export
        $exportData = $parkingRecords->map(function ($record) {
            return [
                'ID' => $record->id,
                'Code' => $record->code,
                'Police Number' => $record->police_number,
                'Entry Time' => $record->entry_time,
                'Exit Time' => $record->exit_time,
            ];
        });

        // Prepend column headers
        $headers = [
            'ID',
            'Code',
            'Police Number',
            'Entry Time',
            'Exit Time',
        ];

        return collect([$headers])->merge($exportData);
    }
}
