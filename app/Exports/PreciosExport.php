<?php

namespace App\Exports;

use App\Producto;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class PreciosExport implements FromView, ShouldAutoSize, WithEvents
{

    public function view(): View
    {
        return view('exports.precios', [
            'productos' => Producto::select('codigo', 'producto', 'precio_venta')->get()
        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $styleArray = [
                	'font' =>[
				        'bold'  => true,
				        'size'  => 12,
				    ]
				];
                $event->sheet->setTitle("Hoja 1");
                $event->sheet->getStyle('A3:D3')->applyFromArray($styleArray);
                $styleArray = [
				    'borders' => [
				        'allBorders' => [
				            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				        ],
				    ],
				];
                $event->sheet->getStyle('A3:C'.(Producto::select('codigo', 'producto', 'precio_venta')->count()+3))->applyFromArray($styleArray);
            },
        ];
    }
}
