<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;



class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::where('sort', 1)->get();
    }


    public function columnWidths(): array
    {
        return [
            'A' => 55,
            'B' => 60,  
            'C' => 60,  
            'D' => 90,
            'E' => 60, 
            'F' => 80, 
            'G' => 60,  
            'H' => 60,
            'I' => 60,
            'J' => 80,
            'K' => 60,
            'L' => 100,
            'M' => 60,
            'N' => 60,
                 
        ];
    }


    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Apellido',
            'Correo',
            'Teléfono',
            'Pais',
            'Ciuda',
            'Rol',
            'Empresa',
            'Estado Sorteo',
            'Instagram',
            'Fecha de Creacion',
            'Fecha de Actualizacion'
        ];
    }
}
