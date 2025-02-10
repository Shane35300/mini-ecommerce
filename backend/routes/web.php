<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirtableController;
use App\Services\AirtableService;

Route::get('/airtable', [AirtableController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-airtable', function () {
    dump("hello");
    dump(env('AIRTABLE_API_KEY'));  // Vérifie que la clé API est bien chargée
    dump(env('AIRTABLE_BASE_ID'));  // Vérifie que l'ID de la base est bien chargé
    dump(env('AIRTABLE_TABLE_NAME'));
    $airtableService = new AirtableService();
    return 'Check the terminal for dump outputs!';
});