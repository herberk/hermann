<?php

namespace App\Exports;

use App\models\empresas\capital;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Events\AfterSheet;

class CapitalFromView implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection

    public function collection()
    {
        //
    }
     *     */
/*    public function __construct(int $ano)
    {
        $this->year = $ano;
    }

    public function forYear($ano)
    {
    return $ano;
    }*/

    public function view(): View
    {
        return view('capital.exports.showpdf', [
//            'capital' => Activity::all()
            'date' => date('d-m-Y'),
            'capital' => capital::where('empresas_id',(setting('id_empresa')))
                 ->where('ano',setting('ano'))
                 ->first()

        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1';   // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);

                $styleArray = [
                    'font' => [
                        'bold' => true,
                    ],
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                            'color' => ['argb' => 'FFFF0000'],
                        ],
                    ],
                ];
            },
        ];
    }
}
