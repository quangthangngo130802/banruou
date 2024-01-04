<?php
include('../../../conn/connect.php');
include('../../../Classes/PHPExcel.php');

if (isset($_POST['xuat'])) {
    $time = $_POST['hong'];
    $objPHPExcel = new PHPExcel();

    // Add some data
    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Thời gian')
        ->setCellValue('B1', 'Doanh thu')
        ->setCellValue('C1', 'Đơn vị');
    $rowCount = 1;
    if ($time == 'day') {
        foreach ($dataDay as $row) {
            $rowCount++;

            $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValue('A' . $rowCount, $row['day'])
                        ->setCellValue('B' . $rowCount, $row['total_revenue_day'])
                        ->setCellValue('C' . $rowCount, 'VNĐ');
        }
    } else if ($time == 'week') {
        foreach ($dataWeek as $row) {
            $rowCount++;
            $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValue('A' . $rowCount, 'Tuần '.$row['week'])
                        ->setCellValue('B' . $rowCount, $row['total_revenue_week'])
                        ->setCellValue('C' . $rowCount, 'VNĐ');
        }
    } else if ($time == 'month') {
        foreach ($dataMonth as $row) {
            $rowCount++;
            $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValue('A' . $rowCount, 'Tháng '.$row['month'])
                        ->setCellValue('B' . $rowCount, $row['total_revenue_month'])
                        ->setCellValue('C' . $rowCount, 'VNĐ');
        }
    }


    $objPHPExcel->getActiveSheet()->setTitle('Doanh thu quán rượu của Hồng');

    $objPHPExcel->setActiveSheetIndex(0);

    // Redirect output to a client’s web browser (Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="DoanhThu1TyDo.xlsx"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');

    // If you're serving to IE over SSL, then the following may be needed
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
    exit;
}
