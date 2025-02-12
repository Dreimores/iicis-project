<?php

require_once('phpspreadsheet/vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class reportsController
{

   public function header()
   {
      $spreadsheet = new Spreadsheet();
      $spreadsheet->getDefaultStyle()->getFont()->setName('Arial');
      $spreadsheet->getDefaultStyle()->getFont()->setSize(12);
      $sheet = $spreadsheet->getActiveSheet();

      $sheet->setCellValue('A1', "Republic of the Philippines");
      $sheet->mergeCells("A1:E1");

      $sheet->setCellValue('A2', "Province of Cagayan");
      $sheet->mergeCells("A2:E2");

      $sheet->setCellValue('A3', "CAGAYAN STATE UNIVERSITY at LASAM");
      $sheet->mergeCells("A3:E3");

      $sheet->setCellValue('A5', "Lasam, Cagayan");
      $sheet->mergeCells("A5:E5");

      $sheet->setCellValue('A7', "Year Level");
      $sheet->setCellValue('B7', "Civil Status");
      $sheet->setCellValue('C7', "Religion");
      $sheet->setCellValue('D7', "Sex");
      $sheet->setCellValue('E7', "Town Province");

      // Center align header cells
      $sheet->getStyle('A1:E7')->getAlignment()->setHorizontal('center');

      // Bold headers
      $sheet->getStyle('A3')->getFont()->setBold(true);
      $sheet->getStyle('A7:E7')->getFont()->setBold(true);

      // Auto-size columns
      foreach (range('A', 'E') as $col) {
         $sheet->getColumnDimension($col)->setAutoSize(true);
      }

      // Background color for table headers
      $tableBackground = [
         'font' => ['color' => ['rgb' => 'FFFFFF']],
         'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => '538ED5']],
      ];
      $sheet->getStyle('A7:E7')->applyFromArray($tableBackground);

      return $spreadsheet;
   }

   public function individual()
   {
      $spreadsheet = $this->header();
      
      // Query Here

      $this->download_excel_file($spreadsheet);
   }

   public function counseling()
   {
      $spreadsheet = $this->header();
      
      // Query Here

      $this->download_excel_file($spreadsheet);
   }

   public function career_guidance()
   {
      $spreadsheet = $this->header();
      
      // Query Here

      $this->download_excel_file($spreadsheet);
   }

   public function download_excel_file($spreadsheet)
   {
      $writer = new Xlsx($spreadsheet);
      $currentDate = date('Y-m-d');
      $fileName = "career-guidance-" . $currentDate . ".xlsx";

      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="' . urlencode($fileName) . '"');
      ob_end_clean();
      $writer->save('php://output');
   }
}
?>
