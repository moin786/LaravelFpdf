<?php

namespace peal\larapdf\Mediator;

use peal\larapdf\FPDF;

class Pdf 
{
    /**
     * The FPDF instance
     * 
     * 
     * @var Moinu\LaraPdf\FPDF 
     */
    protected $pdf;
    
    /**
     * @param Moinu\LaraPdf\FPDF $pdf
     */
    public function __construct(FPDF $pdf) {
        $this->pdf = $pdf;
    }
    
    /**
     * set left top right margin
     * 
     * @param float $left
     * @param float $top
     * @param float $right
     * 
     * 
     * @return $this object
     */
    
    public function SetMargins($left, $top, $right=null) {
        
        $this->pdf->SetMargins($left, $top, $right);
        
        return $this;
    }
    
    /**
     * set left margin
     * 
     * 
     * @param float $margin
     * 
     * 
     * @return $this object
     */

    public function SetLeftMargin($margin) {
        
        $this->pdf->SetLeftMargin($margin);
        
        return $this;
    }
    
    /**
     * Set top margin
     * 
     * @param float $margin
     * 
     * 
     * @return $this object
     */

    public function SetTopMargin($margin) {
        
        $this->pdf->SetTopMargin($margin);
        
        return $this;
    }
    
    /**
     * Set right margin
     * 
     * 
     * @param float $margin
     * 
     * 
     * @return $this object
     */

    public function SetRightMargin($margin) 
            {
        $this->pdf->SetRightMargin($margin);
        
        return $this;
    }
    
    /**
     * Set auto page break mode and triggering margin
     * 
     * @param boolean $auto
     * @param float $margin
     * @return $this object
     */

    public function SetAutoPageBreak($auto, $margin=0) {
        
        $this->pdf->SetAutoPageBreak($auto, $margin);
        
        return $this;
    }
    
    /**
     * Set display mode in viewer
     * 
     * @param string $zoom
     * @param string $layout
     * @return $this object
     */

    public function SetDisplayMode($zoom, $layout='default') {
        
        $this->pdf->SetDisplayMode($zoom, $layout);
        
        return $this;
    }
    
    /**
     * Set page compression
     * 
     * @param boolean $compress
     * @return $this object
     */

    public function SetCompression($compress) {
        
        $this->pdf->SetCompression($compress);
        
        return $this;
    }
    
    /**
     * Title of document
     * 
     * @param string $title
     * @param boolean $isUTF8
     * @return $this object
     */

    public function SetTitle($title, $isUTF8=false) {
        
        $this->pdf->SetTitle($title, $isUTF8);
        
        return $this;
    }
    
    /**
     * Author of document
     * 
     * @param string $author
     * @param boolean $isUTF8
     * @return $this object
     */

    public function SetAuthor($author, $isUTF8=false) {
        
        $this->pdf->SetAuthor($author, $isUTF8);
        
        return $this;
    }
    
    /**
     * Subject of document
     * 
     * @param string $subject
     * @param boolean $isUTF8
     * @return $this object
     */
    public function SetSubject($subject, $isUTF8=false) {
        
        $this->pdf->SetSubject($subject, $isUTF8);
        
        return $this;
    }

    /**
     * Keywords of document
     * 
     * @param string $keywords
     * @param boolean $isUTF8
     * @return $this object
     */
    public function SetKeywords($keywords, $isUTF8=false) {
        
        $this->pdf->SetKeywords($keywords, $isUTF8);
        
        return $this;
    }
    
    /**
     * Creator of document
     * 
     * @param string $creator
     * @param boolean $isUTF8
     * @return $this object
     */

    public function SetCreator($creator, $isUTF8=false) {
        
        $this->pdf->SetCreator($creator, $isUTF8);
        
        return $this;
    }
    
    /**
     * Define an alias for total number of pages
     * 
     * @param string $alias
     * @return $this
     */
    public function AliasNbPages($alias='{nb}') {
        
        $this->pdf->AliasNbPages($alias);
        
        return $this;
    }

    /**
     * Fatal error
     * 
     * @param string $msg
     * @return $this
     */
    public function Error($msg) {
        
        $this->pdf->Error($msg);
        
        return $this;
    }

    /**
     * Terminate document
     * 
     * @return $this
     */
    public function Close() {
        
        $this->pdf->Close();
        
        return $this;
    }

    /**
     * Start a new page
     * 
     * @param string $orientation
     * @param string $size
     * @param int $rotation
     * @return $this
     */
    public function AddPage($orientation='', $size='', $rotation=0) {
        
        $this->pdf->AddPage($orientation, $size, $rotation);
        
        return $this;
    }

    /**
     * To be implemented in your own inherited class
     * 
     * @return $this
     */
    public function Header() {
        
        $this->pdf->Header();
        
        return $this;
    }
    
    /**
     * To be implemented in your own inherited class
     * 
     * @return $this
     */
    public function Footer() {
        
        $this->pdf->Footer();
        
        return $this;
    }

    /**
     * Get current page number
     * 
     * @return $this
     */
    public function PageNo() {
        
        $this->pdf->PageNo();
        
        return $this;
    }

    /**
     * Set color for all stroking operations
     * 
     * @param int $r
     * @param int $g
     * @param int $b
     * @return $this
     */
    public function SetDrawColor($r, $g=null, $b=null) {
        
        $this->pdf->SetDrawColor($r, $g, $b);
        
        return $this;
    }

    /**
     * Set color for all filling operations
     * 
     * @param int $r
     * @param int $g
     * @param int $b
     * @return $this
     */
    public function SetFillColor($r, $g=null, $b=null) {
        
        $this->pdf->SetFillColor($r, $g, $b);
        
        return $this;
    }

    /**
     * Set color for text
     * 
     * @param int $r
     * @param int $g
     * @param int $b
     * @return $this
     */
    public function SetTextColor($r, $g=null, $b=null) {
        
        $this->pdf->SetTextColor($r, $g, $b);
        
        return $this;
    }

    /**
     * Get width of a string in the current font
     * 
     * @param string $s
     * @return $this
     */
    public function GetStringWidth($s) {
        
        $this->pdf->GetStringWidth($s);
        
        return $this;
    }

    /**
     * Set line width
     * 
     * @param float $width
     * @return $this
     */
    public function SetLineWidth($width) {
        
        $this->pdf->SetLineWidth($width);
        
        return $this;
    }

    /**
     * Draw a line
     * 
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @return $this
     */
    public function Line($x1, $y1, $x2, $y2) {
        
        $this->pdf->Line($x1, $y1, $x2, $y2);
        
        return $this;
    }

    /**
     * Draw a rectangle
     * 
     * @param float $x
     * @param float $y
     * @param float $w
     * @param float $h
     * @param float $style
     * @return $this
     */
    public function Rect($x, $y, $w, $h, $style='') {
        
        $this->pdf->Rect($x, $y, $w, $h, $style);
        
        return $this;
    }

    /**
     * Add a TrueType, OpenType or Type1 font
     * 
     * @param string $family
     * @param string $style
     * @param string $file
     * @return $this
     */
    public function AddFont($family, $style='', $file='') {
        
        $this->pdf->AddFont($family, $style, $file);
        
        return $this;
    }

    /**
     * Select a font; size given in points
     * 
     * @param string $family
     * @param string $style
     * @param int $size
     * @return $this
     */
    public function SetFont($family, $style='', $size=0) {
        
        $this->pdf->SetFont($family, $style, $size);
        
        return $this;
    }

    /**
     * Set font size in points
     * 
     * @param float $size
     * @return $this
     */
    public function SetFontSize($size) {
        
        $this->pdf->SetFontSize($size);
        
        return $this;
    }

    /**
     * Create a new internal link
     * 
     * @return int
     */
    public function AddLink() {
        
        $this->pdf->AddLink();
        
        return $this;
    }

    /**
     * Set destination of internal link
     * 
     * @param int $link
     * @param float $y
     * @param int $page
     * @return $this
     */
    public function SetLink($link, $y=0, $page=-1) {
        
        $this->pdf->SetLink($link, $y, $page);
        
        return $this;
    }

    /**
     * Put a link on the page
     * 
     * @param float $x
     * @param float $y
     * @param float $w
     * @param float $h
     * @param mixed $link
     * @return $this
     */
    public function Link($x, $y, $w, $h, $link) {
        
        $this->pdf->Link($x, $y, $w, $h, $link);
        
        return $this;
    }

    /**
     * Output a string
     * 
     * @param float $x
     * @param float $y
     * @param type $txt
     * @return $this
     */
    public function Text($x, $y, $txt) {
        
        $this->pdf->Text($x, $y, $txt);
        
        return $this;
    }
    
    /**
     * Accept automatic page break or not
     * 
     * @return $this
     */
    public function AcceptPageBreak() {
        
        $this->pdf->AcceptPageBreak();
        
        return $this;
    }

    /**
     * Output a cell
     * 
     * 
     * @param float $w
     * @param float $h
     * @param string $txt
     * @param mixed $border
     * @param int $ln
     * @param string $align
     * @param boolean $fill
     * @param mixed $link
     * @return $this
     */
    public function Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='') {
        
        $this->pdf->Cell($w, $h, $txt, $border, $ln, $align, $fill, $link);
        
        
        return $this;
    }

    /**
     * Output text with automatic or explicit line breaks
     * 
     * @param float $w
     * @param float $h
     * @param string $txt
     * @param mixed $border
     * @param string $align
     * @param boolean $fill
     * @return $this
     */
    public function MultiCell($w, $h, $txt, $border=0, $align='J', $fill=false) {
        
        $this->pdf->MultiCell($w, $h, $txt, $border, $align, $fill);
        
        return $this;
    }

    /**
     * Output text in flowing mode
     * 
     * @param float $h
     * @param string $txt
     * @param mixed $link
     * @return $this
     */
    public function Write($h, $txt, $link='') {
        
        $this->pdf->Write($h, $txt, $link);
        
        return $this;
    }

    /**
     * Line feed; default value is the last cell height
     * 
     * @param float $h
     * @return $this
     */
    public function Ln($h=null) {
        
        $this->pdf->Ln($h);
        
        return $this;
    }

    /**
     * Put an image on the page
     * 
     * @param string $file
     * @param float $x
     * @param float $y
     * @param float $w
     * @param float $h
     * @param string $type
     * @param mixed $link
     * @return $this
     */
    public function Image($file, $x=null, $y=null, $w=0, $h=0, $type='', $link='') {
        
        $this->pdf->Image($file, $x, $y, $w, $h, $type, $link);
        
        return $this;
    }

    /**
     * Get current page width
     * 
     * @return $this
     */
    public function GetPageWidth() {
        
        $this->pdf->GetPageWidth();
        
        return $this;
    }

    /**
     * Get current page height
     * 
     * @return $this
     */
    public function GetPageHeight() {
        
        $this->pdf->GetPageHeight();
        
        return $this;
    }

    /**
     * // Get x position
     * 
     * @return $this
     */
    public function GetX() {
        
        $this->pdf->GetX();
        
        return $this;
    }

    /**
     * Set x position
     * 
     * @param float $x
     * @return $this
     */
    public function SetX($x) {
        
        $this->pdf->SetX($x);
        
        return $this;
    }

    /**
     * Get y position
     * 
     * @return $this
     */
    public function GetY() {
        
        $this->pdf->GetY();
        
        return $this;
    }

    /**
     * Set y position and optionally reset x
     * 
     * @param float $y
     * @param boolean $resetX
     * @return $this
     */
    public function SetY($y, $resetX=true) {
        
        $this->pdf->SetY($y, $resetX);
        
        return $this;
    }

    /**
     * Set x and y positions
     * 
     * @param float $x
     * @param float $y
     * @return $this
     */
    public function SetXY($x, $y) {
        
        $this->pdf->SetXY($x);
        
        return $this;
    }

    /**
     * Output PDF to some destination
     * 
     * @param string $dest
     * @param string $name
     * @param boolean $isUTF8
     */
    public function Output($dest='', $name='', $isUTF8=false) {
        
        $this->pdf->Output($dest, $name, $isUTF8);
        exit;
    }
}
