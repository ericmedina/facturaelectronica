<?php

namespace App\Exports;

use App\Producto;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class StockExport implements FromView, WithEvents
{
    public function view(): View
    {
        return view('exports.stock', [
            'productos' => Producto::select('codigo', 'producto', 'stock', 'stock_minimo', 'precio_venta')->get()
        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
            	$event->sheet->getStyle('A1')->getAlignment()->setWrapText(true);
                $styleArray = [
                	'font' =>[
				        'bold'  => true,
				        'size'  => 12,
				    ]
				];
                $event->sheet->setTitle("Hoja 1");
                $event->sheet->getStyle('A3:E3')->applyFromArray($styleArray);
                $styleArray = [
				    'borders' => [
				        'allBorders' => [
				            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				        ],
				    ],
				];
                $event->sheet->getStyle('A3:E'.(Producto::select('codigo', 'producto', 'stock', 'stock_minimo', 'precio_venta')->get()->count()+3))->applyFromArray($styleArray);
            },
        ];
    }
}
