<?php

require_once('phpspreadsheet/vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class reportsController
{
   private $reportsModel;

   public function __construct()
   {
      $this->reportsModel = new reportsModel();
   }

   /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

   public function individual() {
      // header
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

      // Background color for table headers
      $tableBackground = [
         'font' => ['color' => ['rgb' => 'FFFFFF']],
         'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => '538ED5']],
      ];
      $sheet->getStyle('A7:E7')->applyFromArray($tableBackground);
      // end

      // column header
      $sheet = $spreadsheet->getActiveSheet(); // Ensure sheet is set
      $sheet->setCellValue('A7', "Year Level");
      $sheet->setCellValue('B7', "Civil Status");
      $sheet->setCellValue('C7', "Religion");
      $sheet->setCellValue('D7', "Sex");
      $sheet->setCellValue('E7', "Town Province");
      // end

      // Center align header cells
      $sheet->getStyle('A1:E7')->getAlignment()->setHorizontal('center');
      // end

      // Bold headers
      $sheet->getStyle('A3')->getFont()->setBold(true);
      $sheet->getStyle('A7:E7')->getFont()->setBold(true);
      // end

      // Auto-size columns
      foreach (range('A', 'E') as $col) {
         $sheet->getColumnDimension($col)->setAutoSize(true);
      }
      // end

      // Style the border
      $styleArray = array(
         'borders' => array(
             'outline' => array(
               'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
               'color' => array('argb' => '00000000'),
            ),
         ),
      );
      // End

      $firstrow = 7;
      $lastrow = 7;
      $sheet->setAutoFilter("A".$firstrow.":E".$lastrow);
      
      // Properties
      $rowCount  = 8;
      $college   = $_POST['college'] ?? '';    // Use null coalescing to avoid "Undefined index"
      $yearlevel = $_POST['yearlevel'] ?? '';  // Ensure variables are set
      $dateStart = $_POST['dateStart'] ?? '';  
      $dateToEnd = $_POST['dateToEnd'] ?? '';

      if ($_SERVER['REQUEST_METHOD'] === "POST") {

         if (!empty($yearlevel) && !empty($college)) {

            // Ensure correct order of parameters (yearlevel first, then college, then dates)
            foreach ($this->reportsModel->year_college_individual_reports($yearlevel, $college, $dateStart, $dateToEnd) as $row) { 

               $sheet->setCellValue('A'.$rowCount, $row['ylevel'] ?? '');
               $sheet->setCellValue('B'.$rowCount, $row['p_cilvilstatus'] ?? '');
               $sheet->setCellValue('C'.$rowCount, $row['p_religion'] ?? '');
               $sheet->setCellValue('D'.$rowCount, $row['p_sex'] ?? '');
               $sheet->setCellValue('E'.$rowCount, $row['p_homeaddress'] ?? '');

               foreach (range('A', 'E') as $col) {
                  $sheet->getStyle($col.$rowCount)->applyFromArray($styleArray);
               }
               $rowCount++;

            } 

         } elseif (empty($yearlevel) && empty($college)) {
            
            foreach ($this->reportsModel->all_individual_reports($dateStart, $dateToEnd) as $row) { 

               $sheet->setCellValue('A'.$rowCount, $row['ylevel'] ?? '');
               $sheet->setCellValue('B'.$rowCount, $row['p_cilvilstatus'] ?? '');
               $sheet->setCellValue('C'.$rowCount, $row['p_religion'] ?? '');
               $sheet->setCellValue('D'.$rowCount, $row['p_sex'] ?? '');
               $sheet->setCellValue('E'.$rowCount, $row['p_homeaddress'] ?? '');

               foreach (range('A', 'E') as $col) {
                  $sheet->getStyle($col.$rowCount)->applyFromArray($styleArray);
               }
               $rowCount++;
            } 
         
         } elseif (!empty($college)) {

            foreach ($this->reportsModel->college_individual_reports($college, $dateStart, $dateToEnd) as $row) { 
               $sheet->setCellValue('A'.$rowCount, $row['ylevel'] ?? '');
               $sheet->setCellValue('B'.$rowCount, $row['p_cilvilstatus'] ?? '');
               $sheet->setCellValue('C'.$rowCount, $row['p_religion'] ?? '');
               $sheet->setCellValue('D'.$rowCount, $row['p_sex'] ?? '');
               $sheet->setCellValue('E'.$rowCount, $row['p_homeaddress'] ?? '');

               foreach (range('A', 'E') as $col) {
                  $sheet->getStyle($col.$rowCount)->applyFromArray($styleArray);
               }
               $rowCount++;
            } 
         } elseif(!empty($yearlevel)) {

            foreach ($this->reportsModel->yearlevel_individual_reports($yearlevel, $dateStart, $dateToEnd) as $row) { 
               $sheet->setCellValue('A'.$rowCount, $row['ylevel'] ?? '');
               $sheet->setCellValue('B'.$rowCount, $row['p_cilvilstatus'] ?? '');
               $sheet->setCellValue('C'.$rowCount, $row['p_religion'] ?? '');
               $sheet->setCellValue('D'.$rowCount, $row['p_sex'] ?? '');
               $sheet->setCellValue('E'.$rowCount, $row['p_homeaddress'] ?? '');

               foreach (range('A', 'E') as $col) {
                  $sheet->getStyle($col.$rowCount)->applyFromArray($styleArray);
               }
               $rowCount++;
            } 

         } else {

            $sheet->setCellValue('A8', 'No data available')->mergeCells("A8:E8");
            $sheet->getStyle('A8')->getAlignment()->setHorizontal('center');
         
         }

      } 

      $this->download_excel_file($spreadsheet);
   
   }


   /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


   public function counseling()
   {
      // header
      $spreadsheet = new Spreadsheet();
      $spreadsheet->getDefaultStyle()->getFont()->setName('Arial');
      $spreadsheet->getDefaultStyle()->getFont()->setSize(12);
      $sheet = $spreadsheet->getActiveSheet();

      $sheet->setCellValue('A1', "Republic of the Philippines");
      $sheet->mergeCells("A1:F1");

      $sheet->setCellValue('A2', "Province of Cagayan");
      $sheet->mergeCells("A2:F2");

      $sheet->setCellValue('A3', "CAGAYAN STATE UNIVERSITY at LASAM");
      $sheet->mergeCells("A3:F3");

      $sheet->setCellValue('A5', "Lasam, Cagayan");
      $sheet->mergeCells("A5:F5");

      // Background color for table headers
      $tableBackground = [
         'font' => ['color' => ['rgb' => 'FFFFFF']],
         'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => '538ED5']],
      ];
      $sheet->getStyle('A7:F7')->applyFromArray($tableBackground);
      // end

      // column header
      $sheet = $spreadsheet->getActiveSheet(); // Ensure sheet is set
      $sheet->setCellValue('A7', "Nature of Counseling");
      $sheet->setCellValue('B7', "College of Clientele");
      $sheet->setCellValue('C7', "No. of Clientele");
      $sheet->setCellValue('D7', "Type of Counseling");
      $sheet->setCellValue('E7', "Referred");
      $sheet->setCellValue('F7', "Counseling Status");
      // end

      // Center align header cells
      $sheet->getStyle('A1:F7')->getAlignment()->setHorizontal('center');
      // end

      // Bold headers
      $sheet->getStyle('A3')->getFont()->setBold(true);
      $sheet->getStyle('A7:F7')->getFont()->setBold(true);
      // end

      // Auto-size columns
      foreach (range('A', 'F') as $col) {
         $sheet->getColumnDimension($col)->setAutoSize(true);
      }
      // end

      $styleArray = array(
         'borders' => array(
             'outline' => array(
               'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
               'color' => array('argb' => '00000000'),
            ),
         ),
      );

      $firstrow = 7;
      $lastrow = 7;
      $sheet->setAutoFilter("A".$firstrow.":F".$lastrow);

      // Properties
      $rowCount  = 8;
      $fromCounselStart = $_POST['fromCounselStart'] ?? [];
      $to_counsel_end   = $_POST['to_counsel_end'] ?? [];
      // Query Here
      foreach ($this->reportsModel->counsel_service($fromCounselStart, $to_counsel_end) as $row) 
      { 
         $sheet->setCellValue('A'.$rowCount, $row['ReasonsForCounsel'] ?? '');
         $sheet->setCellValue('B'.$rowCount, $row['collegecode'] ?? '');
         $sheet->setCellValue('C'.$rowCount, $row['p_sex'] ?? '');
         $sheet->setCellValue('D'.$rowCount, $row['TypeOfCounsel'] ?? '');
         $sheet->setCellValue('E'.$rowCount, $row['DateReferred'] ?? '');
         $sheet->setCellValue('F'.$rowCount, $row['CounselStatus'] ?? '');

         foreach (range('A', 'F') as $col) 
         {
            $sheet->getStyle($col.$rowCount)->applyFromArray($styleArray);
         }
         $rowCount++;
      } 

      $this->download_excel_file($spreadsheet);
   }


   /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


   public function career_guidance()
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

      // Background color for table headers
      $tableBackground = [
         'font' => ['color' => ['rgb' => 'FFFFFF']],
         'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => '538ED5']],
      ];
      $sheet->getStyle('A7:E7')->applyFromArray($tableBackground);
      
      // Query Here


      $this->download_excel_file($spreadsheet);
   }


   /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


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

   /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


}
?>
