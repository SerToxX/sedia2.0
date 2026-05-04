<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactoMail;

class ContactoService
{
    public function enviarCorreo($request)
    {
        $data = $request->only([
            'nombre',
            'empresa',
            'telefono',
            'documento',
            'email',
            'mensaje'
        ]);
        $archivos = [];
        Log::info('ContactoService: Iniciando envío de correo', [
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'tiene_archivos' => $request->hasFile('archivos'),
            'cantidad_archivos' => $request->hasFile('archivos') ? count($request->file('archivos')) : 0
        ]);
        if ($request->hasFile('archivos')) {
            Log::info('ContactoService: Procesando archivos');
            foreach ($request->file('archivos') as $archivo) {
                try {
                    $nombreOriginal = $archivo->getClientOriginalName();
                    Log::info('ContactoService: Guardando archivo', [
                        'nombre_original' => $nombreOriginal,
                        'size' => $archivo->getSize(),
                        'mime' => $archivo->getMimeType()
                    ]);
                    // Se guarda con nombre hash en disco (seguro), pero conservamos el nombre original para el correo
                    $path = $archivo->store('contactos');
                    $fullPath = storage_path('app/' . $path);
                    Log::info('ContactoService: Archivo guardado', [
                        'path' => $path,
                        'fullPath' => $fullPath,
                        'existe' => file_exists($fullPath)
                    ]);
                    $archivos[] = [
                        'path' => $path,
                        'nombre_original' => $nombreOriginal
                    ];
                } catch (\Exception $e) {
                    Log::error('ContactoService: Error al guardar archivo', [
                        'error' => $e->getMessage(),
                        'archivo' => $archivo->getClientOriginalName()
                    ]);
                    throw $e;
                }
            }
        }
        Log::info('ContactoService: Enviando correo', [
            'archivos_count' => count($archivos),
            'archivos' => $archivos
        ]);
        try {
            Mail::to('cocotabo7715@gmail.com')
                ->send(new ContactoMail($data, $archivos));
            Log::info('ContactoService: Correo enviado exitosamente', [
                'email_destino' => 'cocotabo7715@gmail.com'
            ]);
        } catch (\Exception $e) {
            Log::error('ContactoService: Error al enviar correo', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }
}
