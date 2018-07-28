<?php

/**
 * Can use route from here
 */

use peal\larapdf\Facades\Pdf;
Route::get("/testpdf",function(){
    //$pdf = App::make('pdf');
    
        $row_height = 6;

        $y_axis = 50;
        $y_axis = $y_axis + $row_height;
    
        Pdf::AddPage()
        ->SetFont('Arial','B',16)
        ->Cell(0,10,"SAIC Institute of Management & Technology",0,0,'C')
        ->SetFont('Arial','B',12)
        ->Cell(-65, 30, 'Begum Rokeya Avenue, Dhaka',0,'C',0)
        ->Cell(-11, 50, 'Phone: 01936-005816',0,'C',0)
        ->SetFillColor(232, 232, 232)
                ->SetY(50)
                ->SetX(25)
                ->SetFont('Arial', 'B', 10)
                ->Cell(20, 6, 'Room No', 1, 0, 'L', 1)
                ->Cell(20, 6, 'Seat No', 1, 0, 'L', 1)
                ->Cell(30, 6, 'Student ID', 1, 0, 'L', 1)
                ->Cell(60, 6, 'Student Name', 1, 0, 'L', 1)
                ->Cell(20, 6, 'Seat Rent', 1, 0, 'L', 1)
                ->Cell(25, 6, 'Meal Charge', 1, 0, 'L', 1)
                ->SetY($y_axis)
                ->SetX(25)
                ->SetFont('Arial', '', 10)
                ->Cell(20, 6, 200, 1, 0, 'L', 1)
                ->Cell(20, 6, 201, 1, 0, 'L', 1)
                ->Cell(30, 6, 'CMT2018002', 1, 0, 'L', 1)
                ->Cell(60, 6, "Saiful Islam", 1, 0, 'L', 1)
                ->Cell(20, 6, 2000, 1, 0, 'L', 1)
                ->Cell(25, 6, 50, 1, 0, 'L', 1)
                
                ->Output();
});