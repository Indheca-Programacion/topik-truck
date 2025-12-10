<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegistroUsuarioController;

Route::get('/hello', function () {
    return response()->json([
        'message' => '¡Hola Mundo! El API de Laravel está operativa.',
        'version' => '12.x',
    ]);
});

Route::post('/data', function (Request $request) {
    
    $dataReceived = $request->all();

    if (empty($dataReceived)) {
        return response()->json([
            'message' => 'POST recibido, pero no se encontraron datos en el cuerpo de la petición.',
        ], 200);
    }
    
    return response()->json([
        'message' => 'Datos recibidos correctamente.',
        'received_data' => $dataReceived,
        'status_code' => 201 
    ], 201);
});

Route::middleware('clave.sistema')->group(function () {

    Route::post('/register', [RegistroUsuarioController::class, 'store']);
    Route::post('/update-password-user', [RegistroUsuarioController::class, 'update']);

});