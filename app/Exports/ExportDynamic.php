<?php

namespace App\Exports;

use App\Models\Dynamic;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class ExportDynamic implements FromCollection, WithHeadings
{
    public $table;
    public $field;

    public function __construct($table,$field)
    {
        $this->table = $table;
        $this->field = $field;
    }

    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table($this->table)->select($this->field)->get();
    }

    public function headings(): array
    {
        return $this->field;
    }
}
