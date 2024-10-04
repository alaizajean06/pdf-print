<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PrintPDF extends Controller
{
    public static function print(Request $request){

       $fpdf = new Fpdf('P','mm','A4');
       $fpdf->AddPage();
       $fpdf->setTitle("Payslip");
       $fpdf->SetFont('Arial', '', 12);
       $fpdf->Ln();
   
        $fpdf->SetFont('Arial', 'B', 20);
        $fpdf->Cell(82, 6, '', 0, 0, 'L');
        $fpdf->Cell(55, 6, 'Payslip', 100, 100,'L' );
        $fpdf->Ln();
        $fpdf->Cell(77, 6, '', 0, 0, '');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(5, 6, '', 0, 0, 'L');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(55, 6, 'Zoonodle Inc', 100, 100,'L' );
         $fpdf->Cell(0.1, 100, '', 0, 0, '');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(5, 2, '', 2, 2, 'L');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(55, 6, '21023 Pearson Point Road', 100, 100,'L' );
         $fpdf->Cell(0.1, 6, '', 0, 0, '');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(.1, 6, '', 0, 0, 'L');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(55, 6, 'Gateway Avenue', 100, 100,'L' );
        $fpdf->Ln();
        $fpdf->Ln();

        $fpdf->SetFont('Arial', '', 10);
        $fpdf->Cell(50, 6, 'Date of Joining', 0, 0,'L' );
        $fpdf->cell(3, 6, ':', 0, 0, '');
        $fpdf->Cell(50, 6, '2018-06-23', 0, 0,'L' );
        $fpdf->Cell(50, 6, 'Employee name', 0, 0,'L' );
        $fpdf->cell(3, 6, ':', 0, 0, '');
        $fpdf->Cell(50, 6, 'Sally Harley', 0, 0,'L' );
        $fpdf->Ln();

        $fpdf->Cell(50, 6, 'Pay Period', 0, 0,'L' );
        $fpdf->cell(3, 6, ':', 0, 0, '');
        $fpdf->Cell(50, 6, 'August 2021', 0, 0,'L' );
        $fpdf->Cell(50, 6, 'Designation', 0, 0,'L' );
        $fpdf->cell(3, 6, ':', 0, 0, '');
        $fpdf->Cell(50, 6, 'Marketing Execution', 0, 0,'L' );
        $fpdf->SetFont('Arial', '', 10);
        $fpdf->Ln();

        $fpdf->Cell(50, 6, 'Worked Days', 0, 0,'L' );
        $fpdf->cell(3, 6, ':', 0, 0, '');
        $fpdf->Cell(50, 6, '26', 0, 0,'L' );
        $fpdf->Cell(50, 6, 'Department', 0, 0,'L' );
        $fpdf->cell(3, 6, ':', 0, 0, '');
        $fpdf->Cell(54, 6, 'Marketing', 0, 0,'L' );
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->SetFont('Arial', 'B', 20);
        $fpdf->Cell(160, 6, 'Earnings', 0, 0,'L' );
        $fpdf->Cell(50, 6, 'Amount', 0, 0,'L' );
        $fpdf->Line(140, 250, 180, 250);
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(50, 6, 'Basic', 0, 0,'L' );
        $fpdf->Cell(127, 6, '', 0, 0,'L' );
        $fpdf->Cell(50, 6, '10000', 0, 0,'L' );
        $fpdf->Ln();

        $fpdf->Cell(50, 6, 'Incentive Pay', 0, 0,'L' );
        $fpdf->Cell(129, 6, '', 0, 0,'L' );
        $fpdf->Cell(50, 6, '1000', 0, 0,'L' );
        $fpdf->Ln();

        $fpdf->Cell(50, 6, 'House Rent Allowance', 0, 0,'L' );
        $fpdf->Cell(131, 6, '', 0, 0,'L' );
        $fpdf->Cell(50, 6, '400', 0, 0,'L' );
        $fpdf->Ln();
        $fpdf->Cell(50, 6, 'Meal Allowance', 0, 0,'L' );
        $fpdf->Cell(131, 6, '', 0, 0,'L' );
        $fpdf->Cell(50, 6, '200', 0, 0,'L' );
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Cell(126, 6, '', 0, 0,'L' );
        $fpdf->Cell(50, 6, 'Total Earnings', 0, 0,'L' );
        $fpdf->Cell(0.5, 6, '', 0, 0,'L' );
        $fpdf->Cell(20, 6, '11600', 0, 0,'L' );
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->SetFont('Arial', 'B', 20);
        $fpdf->Cell(160, 6, 'Deductions', 0, 0,'L' );
        $fpdf->Cell(50, 6, 'Amount', 0, 0,'L' );
        $fpdf->Line(20, 250, 60, 250);
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(49, 6, 'Provident Fund', 0, 0,'L' );
        $fpdf->Cell(127, 6, '', 0, 0,'L' );
        $fpdf->Cell(50, 6, '1200', 0, 0,'L' );
        $fpdf->Ln();
        $fpdf->Cell(50, 6, 'Profesional Tax', 0, 0,'L' );
        $fpdf->Cell(128, 6, '', 0, 0,'L' );
        $fpdf->Cell(50, 6, '500', 0, 0,'L' );
        $fpdf->Ln();
        $fpdf->Cell(50, 6, 'Loan', 0, 0,'L' );
        $fpdf->Cell(128, 6, '', 0, 0,'L' );
        $fpdf->Cell(50, 6, '400', 0, 0,'L' );
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Cell(125, 6, '', 0, 0,'L' );
        $fpdf->Cell(50, 6, 'Total Deductions', 0, 0,'L' );
        $fpdf->Cell(0.05, 6, '', 0, 0,'L' );
        $fpdf-> Cell(20, 6, '2100', 0, 0,'L' );
        $fpdf->Ln();
        $fpdf->Cell(125, 6, '', 0, 0,'L' );
        $fpdf->Cell(50, 6, 'Net Pay', 0, 0,'L' );
        $fpdf->Cell(1, 6, '', 0, 0,'L' );
        $fpdf->Cell(20, 6, '9500', 0, 0,'L' );
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Cell(93, 6, '', 0, 0, 'L');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(55, 6, '9505', 100, 100,'L' );
        $fpdf->Ln();
        $fpdf->Cell(70, 6, '', 0, 0, 'L');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(55, 6, 'Nine Thousand Five Hundred', 100, 100,'L' );
        $fpdf->Ln();
        $fpdf->Cell(10, 6, '', 0, 0,'L' );
        $fpdf->Cell(90, 6, 'Employee Signature', 0, 0,'L' );
        $fpdf->Cell(26, 6, '', 0, 0,'L' );
        $fpdf->cell(3, 6, '', 0, 0, '');
        $fpdf->Cell(50, 6, 'Employee Signature', 0, 0,'L' );
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Cell(70, 6, '', 0, 0, 'L');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(55, 6, 'This is system generated payslip', 100, 100,'L' );
        $fpdf->Ln();
        
        






       $fpdf->Output();
       exit;

    }
}
