<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AirtableService;

class AirtableController extends Controller
{
    protected $airtableService;

    public function __construct(AirtableService $airtableService)
    {
        $this->airtableService = $airtableService;
    }

    public function index()
    {
        $records = $this->airtableService->getRecords();
        return view('airtable.index', compact('records'));
    }
}