<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function productos()
    {
        return view('pages.productos');
    }

    public function preguntasFrecuentes()
    {
        return view('pages.preguntas-frecuentes.preguntas-frecuentes');
    }

    public function terminosCondiciones()
    {
        return view('pages.terminos-condiciones.terminos-condiciones');
    }

    public function politicasDevolucion()
    {
        return view('pages.politicas-devolucion.politicas-devolucion');
    }

    public function proyectos()
    {
        return view('pages.proyectos.proyectos');
    }

    public function sobreNosotros()
    {
        return view('pages.sobre-nosotros.sobre-nosotros');
    }

    public function libroReclamaciones()
    {
        return view('pages.libro-reclamaciones.libro-reclamaciones');
    }
}
