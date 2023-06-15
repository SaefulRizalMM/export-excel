<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportIbpr;
use App\Exports\ExportDynamic;
use DB;

class ExportExcelController extends Controller
{
    public function index()
    {
        $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();
        // $field = DB::getSchemaBuilder()->getColumnListing($tables[4]);
        // dd($tables);
       return view('export/index',compact('tables'));
    }

    public function exportIbpr(Request $request)
    {
        return (new ExportIbpr())->download('export_ibpr'.'-'.now().'.xlsx');
    } 

    public function dynamicExport(Request $request)
    {
        $table=$request->input('table');
        $field=$request->input('field');
        return (new ExportDynamic($table,$field))->download('export_'.$table.'-'.now().'.xlsx');
    } 

    public function getFieldTable(Request $request)
    {
        try {
            $table = $request->input('table_id');
            $field = DB::getSchemaBuilder()->getColumnListing($table);
            $data = $field;

            return response()->json([
                'success' => true,
                'data' => $data,
                'message' => 'Sukses mengambil data',
            ], 200);
        } catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
