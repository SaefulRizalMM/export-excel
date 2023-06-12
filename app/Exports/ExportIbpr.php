<?php

namespace App\Exports;

use App\Models\Ibpr;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ExportIbpr implements FromView, WithEvents
{

    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     //
    // }
    use Exportable;

    public $type;
    public $rangetime;

    public function __construct()
    {

    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $alphabet       = $event->sheet->getHighestDataColumn();
                $totalRow       = $event->sheet->getHighestDataRow();
                $cellRange      = 'A1:'.$alphabet.$totalRow;
                $cellRangeBody      = 'A6:'.$alphabet.$totalRow;
                $event->sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setName('Calibri')->setSize(11);
                $event->sheet->getDelegate()
                            ->getStyle('A1:AC5')
                            ->getAlignment()
                            ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)
                            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)
                            ->setWrapText(true);
                $event->sheet->getDelegate()
                            ->getStyle($cellRangeBody)
                            ->getAlignment()
                            ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP)
                            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT)
                            ->setWrapText(true);
                $event->sheet->getDelegate()
                            ->getStyle('P2')
                            ->getAlignment()
                            ->setTextRotation(90)
                            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()
                            ->getStyle('R2')
                            ->getAlignment()->setTextRotation(90);
                $event->sheet->getDelegate()
                            ->getStyle('S2')
                            ->getAlignment()
                            ->setTextRotation(90)
                            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()
                            ->getStyle('AA2')
                            ->getAlignment()
                            ->setTextRotation(90)
                            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()
                            ->getStyle('AB2')
                            ->getAlignment()
                            ->setTextRotation(90)
                            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            },
        ];
    }

    public function view(): View
    {

        $data = Ibpr::all();
        
        return view('export.ibpr-excel', [
            'data' => $data
        ]);
    }
}
