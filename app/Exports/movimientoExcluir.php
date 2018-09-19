<?php
namespace App\Exports;
use App\User;
use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\BeforeWriting;
use Maatwebsite\Excel\Events\BeforeSheet;

class movimientoExcluir implements FromCollection,  WithMapping, WithHeadings , WithTitle, WithColumnFormatting, WithEvents
{

    /**
     * @return Collection
     */
    public function collection()
    {
        $data = DB::table('movimiento_personal')
        ->select('persona.cip','persona.apellidopaterno','persona.apellidomaterno','persona.nombres','unidadlaboral.codigo as codigounidad','cargo.codigo as codigocargo','documento.nombre as nombredocumento')
        ->join('persona', 'persona.id', '=', 'movimiento_personal.persona_id')
        ->join('unidadlaboral', 'unidadlaboral.id', '=', 'movimiento_personal.unidad_id')
        ->join('cargo','cargo.id','=','movimiento_personal.cargo_id')
        ->join('documento','documento.id','=','movimiento_personal.documento_id')
        ->where('movimiento_personal.tipo','=','incluir')
        ->where('movimiento_personal.estado','=','activo')
        ->orderBy('movimiento_personal.id', 'desc')
        ->get();   

        return $data;     
    }

    public function map($row): array
    {
        return [
            $row->cip,
            $row->apellidopaterno.' '.$row->apellidomaterno.' '.$row->nombres,
            $row->codigounidad,
            $row->codigocargo
        ];
    }

    public function headings(): array
    {
        return [
            'CARNET',
            'APELLIDOS Y NOMBRES',
            'CÓDIGO UNIDAD',
            'CÓDIGO CARGO',        
        ];
    }

    public function title(): string
    {
        return 'Lista de revista-excluir';
    }

    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_GENERAL,
            'B' => NumberFormat::FORMAT_GENERAL,
            'C' => NumberFormat::FORMAT_GENERAL,
            'B' => '0',
                'D' => '0.00',
                'F' => '@',
                'F' => 'yyyy-mm-dd',
               
        ];
    }

    public function registerEvents(): array
    {
        return [
            // Handle by a closure.
            BeforeExport::class => function(BeforeExport $event) {
                $event->writer->getProperties()->setCreator('Patrick');
            },
            
            // Array callable, refering to a static method.
            BeforeWriting::class => [self::class, 'beforeWriting'],
            
            // Using a class with an __invoke method.
            //BeforeSheet::class => new BeforeSheetHandler()
        ];
    }
    public static function beforeWriting(BeforeWriting $event) 
    {
        //
    }
}