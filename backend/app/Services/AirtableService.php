<?php

namespace App\Services;

use TANIOS\Airtable\Airtable;
use Illuminate\Support\Facades\Log;


class AirtableService
{
    protected $airtable;
    protected $table;

    public function __construct()
    {
        dump(env('AIRTABLE_API_KEY'), env('AIRTABLE_BASE_ID'), env('AIRTABLE_TABLE_NAME'));
        $this->airtable = new Airtable([
            'api_key' => env('AIRTABLE_API_KEY'),
            'base' => env('AIRTABLE_BASE_ID'),
            'content_type' => 'application/json',  // Défini explicitement le type de contenu
        ]);

        $this->table = env('AIRTABLE_TABLE_NAME');
    }

    public function getRecords()
    {
        Log::info('Airtable API Key: ' . env('AIRTABLE_API_KEY'));
        Log::info('Airtable Base ID: ' . env('AIRTABLE_BASE_ID'));
        Log::info('Airtable Table Name: ' . env('AIRTABLE_TABLE_NAME'));

        try {
            // Spécifie directement le content_type
            $response = $this->airtable->getContent(env('AIRTABLE_TABLE_NAME'))->getResponse();
            return $response;
        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}