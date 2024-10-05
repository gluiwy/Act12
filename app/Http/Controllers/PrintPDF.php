<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PrintPDF extends Controller
{
    public static function print(Request $request){
        $fpdf = new Fpdf('P','mm','A4');
        $fpdf->Addpage();
        $fpdf->setTitle("Company Head Letter");

        $fpdf->SetFont('Arial', '', 15);
        $fpdf->Cell(70, 6, '', 0, 0, 'L');
        $fpdf->Cell(20, 6, 'Company Head Letter', 6, 0, 'L');
        $fpdf->Ln();
        $fpdf->Ln();

        $fpdf->SetFont('Arial', 'BU', 12);
        $fpdf->Cell(65, 6, '', 0, 0, 'L');
        $fpdf->Cell(20, 6, 'Salary Pay Slip of Ms. XYZ', 6, 0, 'L');
        $fpdf->Ln();
        $fpdf->Ln();

        //1st table
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(10, 6, '', 0, 0, 'L');
        $fpdf->Cell(170, 10, 'Description', 1, 1, 'C');

        //1row 1
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(10, 6, '', 0, 0, 'L');
        $fpdf->Cell(44, 10, 'Date of Joining', 1, 0, 'C');
        $fpdf->Cell(42, 10, '18th October  2019', 1, 0, 'C');
        $fpdf->Cell(42, 10, 'Employee Name', 1, 0, 'C');
        $fpdf->Cell(42, 10, 'Mr. XYZ', 1, 1, 'C'); // Moves to next line after the row

        // Set font for table rows
        $fpdf->SetFont('Arial', '', 12);
        //1row 2
        $fpdf->Cell(10, 6, '', 0, 0, 'L');
        $fpdf->Cell(44, 10, 'Pay Period', 1, 0, 'C');
        $fpdf->Cell(42, 10, '3 Months', 1, 0, 'C');
        $fpdf->Cell(42, 10, 'Designation', 1, 0, 'C');
        $fpdf->Cell(42, 10, 'Your Designation', 1, 1, 'C'); // New line

        //1ow 3
        $fpdf->Cell(10, 6, '', 0, 0, 'L');
        $fpdf->Cell(44, 10, 'Worked Day', 1, 0, 'C');
        $fpdf->Cell(42, 10, '90', 1, 0, 'C');
        $fpdf->Cell(42, 10, 'Department', 1, 0, 'C');
        $fpdf->Cell(42, 10, 'Your Department', 1, 1, 'C'); // New line
        $fpdf->Ln();

        //2nd table
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(50, 10, '', 0, 0, 'L');
        $fpdf->Cell(20, 5, 'Date of Payment Period: 2022 April to June', 0, 1, 'L');
        $fpdf->Ln();

        //2row 1
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(10, 5, '', 0, 0, 'L');
        $fpdf->Cell(44, 10, 'Earnings', 1, 0, 'C');
        $fpdf->Cell(42, 10, 'No. of Months', 1, 0, 'C');
        $fpdf->Cell(42, 10, 'Rate', 1, 0, 'C');
        $fpdf->Cell(42, 10, 'Amount', 1, 1, 'C'); // New line

        //2row 2
        $fpdf->Cell(10, 6, '', 0, 0, 'L');
        $fpdf->Cell(44, 10, 'Basic Salary', 1, 0, 'C');
        $fpdf->Cell(42, 10, '3', 1, 0, 'C');
        $fpdf->Cell(42, 10, '30200.00', 1, 0, 'C');
        $fpdf->Cell(42, 10, '90600.00', 1, 1, 'C'); // New line

        //2row 3
        $fpdf->Cell(10, 5, '', 0, 0, 'L');
        $fpdf->Cell(44, 10, 'Incentive for XYZ', 1, 0, 'C');
        $fpdf->Cell(42, 10, '3', 1, 0, 'C');
        $fpdf->Cell(42, 10, '3500', 1, 0, 'C');
        $fpdf->Cell(42, 10, '10500', 1, 1, 'C'); // New line

        //2row 4
        $fpdf->Cell(10, 5, '', 0, 0, 'L');
        $fpdf->Cell(44, 10, 'Other', 1, 0, 'C');
        $fpdf->Cell(42, 10, '0', 1, 0, 'C');
        $fpdf->Cell(42, 10, '0', 1, 0, 'C');
        $fpdf->Cell(42, 10, '0', 1, 1, 'C'); // New line

        //2row 5
        $fpdf->Cell(10, 5, '', 0, 0, 'L');
        $fpdf->Cell(44, 10, 'Total Salary', 1, 0, 'C');
        $fpdf->Cell(42, 10, '', 1, 0, 'C');
        $fpdf->Cell(42, 10, '', 1, 0, 'C');
        $fpdf->Cell(42, 10, '101,100.00', 1, 1, 'C'); // New line

        //3rd table
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);

        //3T row 1
        $fpdf->Cell(10, 5, '', 0, 0, 'L');
        $fpdf->Cell(127.5, 10, 'Deduction', 1, 0, 'L');
        $fpdf->Cell(42.5, 10, 'Amount', 1, 1, 'C');

        //3T Row 2
        $fpdf->Cell(10, 5, '', 0, 0, 'L');
        $fpdf->Cell(127.5, 10, 'Professional Tax', 1, 0, 'L');
        $fpdf->Cell(42.5, 10, '1011.00', 1, 1, 'C');

        //3T Row 3
        $fpdf->Cell(10, 5, '', 0, 0, 'L');
        $fpdf->Cell(127.5, 10, 'Other', 1, 0, 'L');
        $fpdf->Cell(42.5, 10, '0', 1, 1, 'C');

        //3T Row 4
        $fpdf->Cell(10, 5, '', 0, 0, 'L');
        $fpdf->Cell(127.5, 10, 'Total Deduction', 1, 0, 'L');
        $fpdf->Cell(42.5, 10, '1011.00', 1, 1, 'C');

        //3T Row 5
        $fpdf->Cell(10, 5, '', 0, 0, 'L');
        $fpdf->Cell(127.5, 10, 'Net Pay', 1, 0, 'L');
        $fpdf->Cell(42.5, 10, '100,089.00', 1, 1, 'C');
        $fpdf->Ln();

        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(35, 6, '', 0, 0, 'L');
        $fpdf->Cell(20, 6, 'Amount in Words: One Lakh and Eighty Nine Rupees Only', 6, 0, 'L');
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();


        //Signatures
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(12, 6, '', 0, 0, 'L');
        $fpdf->Cell(60, 6, '________________________', 0, 0, 'C'); // Employer
        $fpdf->Cell(40, 6, '', 0, 0, 'C');
        $fpdf->Cell(60, 6, '________________________', 0, 1, 'C'); // Employee

        $fpdf->Cell(12, 6, '', 0, 0, 'L');
        $fpdf->Cell(60, 6, 'Employer Signature', 0, 0, 'C');
        $fpdf->Cell(40, 6, '', 0, 0, 'C');
        $fpdf->Cell(60, 6, 'Employee Signature', 0, 1, 'C');


        $fpdf->Output();
        exit;
    }
}
