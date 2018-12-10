<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelAdminController extends Controller
{
    //INICIO
    public function index(){
        return view('panel_admin.index');
    }
    //FIN INICIO


    //ESTADISTICAS
    public function grafLinea(){
        return view('panel_admin.estadisticas.flot');
    }

    public function grafOtr(){
        return view('panel_admin.estadisticas.morris');
    }
    //FIN ESTADISTICAS

    
    //CONFIGURACIONES
    public function configuraciones(){
        return view('panel_admin.configuraciones.configuraciones');

    }
    //FIN CONFIGURACIONES


    public function conferencias(){
        return view('panel_admin.conferencias');
    }

    //PARTICIPANTES
    public function participante(){
        return view('panel_admin.participantes.participante');
    }

    public function solicitudes(){
        return view('panel_admin.participantes.solicitudes');
    }
    public function detalle(){
        return view('panel_admin.participantes.detalle');
    }
    //FIN PARTICIPANTES


    //EVENTOS
    public function creare(){
        return view('panel_admin.eventos.crear');
    }

    public function proxevents(){
        return view('panel_admin.eventos.proxe');
    }
    //FIN EVENTOS

    //FORMULARIOS
    public function formularios(){
        return view('panel_admin.formularios.forms');
    }
    //FIN FORMULARIOS

}
