<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('inicio');

Route::get('/productos', [PageController::class, 'productos'])->name('productos');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');

Route::get('/preguntas-frecuentes', [PageController::class, 'preguntasFrecuentes'])->name('faq');

Route::get('/terminos-condiciones', [PageController::class, 'terminosCondiciones'])->name('terminos');

Route::get('/politicas-devolucion', [PageController::class, 'politicasDevolucion'])->name('politicas-devolucion');

Route::get('/proyectos', [PageController::class, 'proyectos'])->name('proyectos');

Route::get('/sobre-nosotros', [PageController::class, 'sobreNosotros'])->name('nosotros');

Route::get('/libro-reclamaciones', [PageController::class, 'libroReclamaciones'])->name('libro-reclamaciones');

Route::post('/contacto', [ContactoController::class, 'enviar'])
    ->name('contacto.enviar');
