<?php



namespace App\Exports;

use App\Models\parkir;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ParkingExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Retrieve the data you want to export
        return parkir::all();
    }

    public function headings(): array
    {
        // Define the column headers
        return [
            'ID',
            'Code',
            'Police Number',
            'Entry Time',
            'Exit Time',
            // Add more columns as needed
        ];
    }
}
