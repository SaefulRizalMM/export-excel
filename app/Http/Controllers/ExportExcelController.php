<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportIbpr;

class ExportExcelController extends Controller
{
    public function exportIbpr(Request $request)
    {
        return (new ExportIbpr())->download('export_ibpr'.'-'.now().'.xlsx');
    } 
}
