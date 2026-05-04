<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\ContactoService;
use Illuminate\Validation\ValidationException;
class ContactoController extends Controller
{
    protected $contactoService;
    public function __construct(ContactoService $contactoService)
    {
        $this->contactoService = $contactoService;
    }
    public function enviar(Request $request)
    {
        try {
            $validated = $request->validate(
                [
                    'nombre' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'mensaje' => 'required|string',
                    'empresa' => 'nullable|string|max:255',
                    'telefono' => 'nullable|string|max:255',
                    'documento' => 'nullable|string|max:255',
                    'archivos' => 'nullable|array|max:20',
                    'archivos.*' => 'nullable|file|mimes:jpg,jpeg,png,gif,pdf,doc,docx,xls,xlsx,zip,rar'
                ],
                [
                    'nombre.required' => 'El campo Nombres y Apellidos es obligatorio.',
                    'email.required' => 'El campo Email es obligatorio.',
                    'email.email' => 'El Email no tiene un formato válido.',
                    'mensaje.required' => 'El campo Comentanos de tu proyecto es obligatorio.',
                    'archivos.array' => 'El formato de archivos es inválido.',
                    'archivos.max' => 'Solo se permiten hasta 20 archivos.',
                    'archivos.*.file' => 'Uno de los archivos no es válido.',
                    'archivos.*.mimes' => 'Uno de los archivos tiene un tipo no permitido. Permitidos: jpg, jpeg, png, gif, pdf, doc, docx, xls, xlsx, zip, rar.'
                ]
            );
            // Validación total acumulado: 50MB para todos los archivos
            $totalBytes = 0;
            if ($request->hasFile('archivos')) {
                foreach ($request->file('archivos') as $archivo) {
                    $totalBytes += $archivo->getSize();
                }
            }
            $maxTotalBytes = 50 * 1024 * 1024; // 50MB
            if ($totalBytes > $maxTotalBytes) {
                $totalMb = round($totalBytes / (1024 * 1024), 2);
                if ($request->ajax()) {
                    return response()->json([
                        'success' => false,
                        'message' => "El total de archivos excede 50MB (actual: {$totalMb}MB).",
                        'errors' => [
                            'archivos' => ["El total de archivos excede 50MB (actual: {$totalMb}MB)."]
                        ],
                        'missing_fields' => []
                    ], 422);
                }
                return back()
                    ->withErrors(['archivos' => "El total de archivos excede 50MB (actual: {$totalMb}MB)."])
                    ->withInput();
            }
            $this->contactoService->enviarCorreo($request);
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Mensaje enviado correctamente'
                ]);
            }
            return back()->with('success', 'Mensaje enviado correctamente');
        } catch (ValidationException $e) {
            $errors = $e->errors();
            $fieldLabels = [
                'nombre' => 'Nombres y Apellidos',
                'email' => 'Email',
                'mensaje' => 'Comentanos de tu proyecto',
                'empresa' => 'Empresa',
                'telefono' => 'Telefono /Celular',
                'documento' => 'DNI / RUC',
                'archivos' => 'Archivos'
            ];
            $missingFields = [];
            foreach (['nombre', 'email', 'mensaje'] as $requiredField) {
                if (isset($errors[$requiredField])) {
                    $missingFields[] = $fieldLabels[$requiredField] ?? $requiredField;
                }
            }
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Por favor corrige los campos marcados.',
                    'errors' => $errors,
                    'missing_fields' => $missingFields
                ], 422);
            }
            throw $e;
        } catch (\Throwable $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Ocurrió un error inesperado al enviar el mensaje. Intenta nuevamente.'
                ], 500);
            }
            throw $e;
        }
    }
}