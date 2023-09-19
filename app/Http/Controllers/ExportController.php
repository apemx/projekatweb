<?php
namespace App\Http\Controllers;

use App\Models\PropertyRequest;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PDF;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
class ExportController extends Controller
{
  
    public function generateExcel()
    {
        $data = $this->getExcelData();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Type');
        $sheet->setCellValue('C1', 'Property Title');
        $sheet->setCellValue('D1', 'Property Description');
        $sheet->setCellValue('E1', 'Property Location');
        $sheet->setCellValue('F1', 'Price');

        $row = 2;
        foreach ($data as $item) {
            $sheet->setCellValue('A' . $row, $item->id);
            $sheet->setCellValue('B' . $row, $item->type);
            $sheet->setCellValue('C' . $row, $item->title);
            $sheet->setCellValue('D' . $row, $item->description);
            $sheet->setCellValue('E' . $row, $item->location);
            $sheet->setCellValue('F' . $row, $item->price);
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save('export_data/excel_output/podaci.xlsx');

        return response()->download(public_path('export_data/excel_output/podaci.xlsx'));
    }

    public function generatePDF()
    {
        $data = $this->getExcelData();
        $pdf = PDF::loadView('pdf_view', compact('data')); 
        return $pdf->download('export_data/pdf_output/podaci.pdf');
    }

    private function getExcelData()
    {
        return DB::table('properties')
        ->join('type', 'type.id', '=', 'properties.type_id')
        ->join('location', 'location.id', '=', 'properties.location_id')
        ->select(
            'properties.id',
            'location.name as location',
            'type.name as type',
            'properties.title as title',
            'properties.description as description',
            'properties.price as price'
        )->get();
    }
}
