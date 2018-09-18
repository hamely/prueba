<?php
namespace App\Exports;
use DB;
use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
 
class movimientoIncluir implements FromView
{
    public function view():view
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
                            return view('reportes.movimientopersonal.incluir', [
                                'data' =>$data
                            ]);
    }

    public function headings(): array
    {
        return [
            '#',
            'CIP',
            'APELLIDO PATERNO',
            'APELLIDO MATERNO',
            'NOMBRE',
            'CODIGO DE UNIDAD',
            'DOCUMENTO'
        ];
    }
 
}