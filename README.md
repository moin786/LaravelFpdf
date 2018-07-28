<h1 align="center">Laravel Package for FPDF</h1>

<p align="center">
    FPDF is a PHP class which allows to generate PDF files with pure PHP, that is to say without using the PDFlib library. F from FPDF stands for Free: you may use it for any kind of usage and modify it to suit your needs. FPDF has other advantages: high level functions.
</p>

## Installation

Inside your project root directory, open your terminal

```shell
composer require Moinu/LaraPdf
```

Composer will automatically download all dependencies.

#### For Laravel

After complete the installation, open your app.php from config folder, paste below line inside providers array 

```php
Moinu\LaraPdf\PdfServiceProvider::class,
```

For Facade support, paste below line inside aliases array

```php
'Pdf' => peal\larapdf\Facades\Pdf::class,
```

Then run this command

```shell
php artisan vendor:publish --provider="peal\larapdf\PdfServiceProvider"
```
After vendor published check your config folder pdf-config.php is created.

```php
/*
 * FPDF class file
 * 
 */

return [
    'pdfservice'  => peal\larapdf\FPDF::class,
];
```
### Basic settings
```php
$pdf = App::make('pdf');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
```

You can chain it
```php
$pdf = App::make('pdf');
$pdf->AddPage()
    ->SetFont('Arial','B',16)
    ->Cell(40,10,'Hello World!')
    ->Output();
```
### OR 

```php
use peal\larapdf\Facades\Pdf;
Pdf::AddPage()
    ->SetFont('Arial','B',16)
    ->Cell(40,10,'Hello World!')
    ->Output();
```

### Advances Usages without Facades

Inside your Controller method
```php
        $row_height = 6;

        $y_axis = 50;
        $y_axis = $y_axis + $row_height;
        
        $pdf = App::make('pdf');
        $pdf->AddPage()
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
```
### Advance usages using Facades

Inside your Controller method
```php
   use peal\larapdf\Facades\Pdf;
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
```
### More tutorial from
[FPDF](http://www.fpdf.org/)

### Author

[Mohammed Minuddin(Peal)](https://moinshareidea.wordpress.com)
