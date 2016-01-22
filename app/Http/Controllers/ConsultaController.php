<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    public function consulta1(){
        $tuplas = DB::select(DB::raw(
            'SELECT c.nombres,s.nombre,p.fecha_inicio,p.nombre AS nombre_proyecto
             FROM clientes c, sectores s,proyectos p
             WHERE s.id=c.sector_id AND p.cliente_rut=c.rut;
            '
        ));
        return view('consulta.consulta1')->with('tuplas',$tuplas);
    }

    public function consulta2(){
        $tuplas = DB::select(DB::raw(
            'SELECT c.nombres,p.cliente_rut,SUM (p.valor) as total
            FROM proyectos p, clientes c
            WHERE c.rut=p.cliente_rut
            GROUP BY c.nombres,p.cliente_rut;
            '
        ));
        return view('consulta.consulta2')->with('tuplas',$tuplas);
    }

    public function consulta3(){
        $tuplas = DB::select(DB::raw(
            'SELECT p.id,p.fecha_inicio,c.nombres,p.valor AS costo_final
            FROM proyectos p, clientes c
            WHERE c.rut=p.cliente_rut AND extract(MONTH FROM p.fecha_inicio)=10
            ORDER BY p.valor DESC limit 10
            '
        ));
        return view('consulta.consulta3')->with('tuplas',$tuplas);
    }

    public function consulta4(){

    }

    public function consulta5(){
        $tuplas = DB::select(DB::raw(
            'SELECT i.id,i.proyecto_id,i.texto
            FROM informes i
            ORDER BY i.proyecto_id
            '
        ));
        return view('consulta.consulta5')->with('tuplas',$tuplas);
    }

    public function consulta6(){
        $tuplas = DB::select(DB::raw(
            'SELECT DISTINCT e.nombres, h.nombre,e.valor_horas_hombre,c.nombre as cargo_n
            FROM empleados e, habilidades h, cargos c
            WHERE c.id=1 AND c.id=e.cargo_id
            ORDER BY e.valor_horas_hombre ASC
            '
        ));
        return view('consulta.consulta6')->with('tuplas',$tuplas);
    }

    public function consulta7(){
        $tuplas = DB::select(DB::raw(
            'SELECT c.nombres,c.direccion,p.valor,c.telefono,SUM (p.valor) AS total_mes
            FROM proyectos p,clientes c, tipo_proyecto t,empleados_proyectos ep, tipo_proyecto tp
            WHERE  c.rut=p.cliente_rut
              AND tp.id=2 AND t.id=p.tipo_id AND ep.proyecto_id=p.id
            GROUP BY c.nombres,c.direccion,p.valor,c.telefono
            HAVING sum(p.valor)>1500000
            '
        ));
        return view('consulta.consulta7')->with('tuplas',$tuplas);
    }
}
