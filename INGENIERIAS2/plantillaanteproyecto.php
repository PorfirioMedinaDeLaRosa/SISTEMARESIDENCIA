<?php
require ('../LIBRERIA/fpdf/fpdf.php');

function cabeceraHorizontal($cabecera)
    {
        $this->SetXY(10, 10);
        $this->SetFont('Arial','B',10);
        $this->SetFillColor(2,157,116);//Fondo verde de celda
        $this->SetTextColor(240, 255, 240); //Letra color blanco
        foreach($cabecera as $fila)
        {
            //Atención!! el parámetro true rellena la celda con el color elegido
            $this->Cell(24,7, utf8_decode($fila),1, 0 , 'L', true);
        }
    }
class PDF extends FPDF
{
	// Cabecera de página
function Header()
{

    
    // Logo 5 ES IZQUIERDA, 8 TAMAÑO HACIA ABAJO, 200 EL TAMAÑO
    $this->Image("../assets/img/encabezado/encabezado.png",17,10,180);
    // salto de linea
    $this->Ln(10);
}

// Pie de página


//codigo espacio
function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
    {
        //Get string width
        $str_width=$this->GetStringWidth($txt);
 
        //Calculate ratio to fit cell
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $ratio = ($w-$this->cMargin*2)/$str_width;
 
        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit)
        {
            if ($scale)
            {
                //Calculate horizontal scaling
                $horiz_scale=$ratio*100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
            }
            else
            {
                //Calculate character spacing in points
                $char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET',$char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }
 
        //Pass on to Cell method
        $this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);
 
        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
    }
 
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
    }
 
    //Patch to also work with CJK double-byte text
    function MBGetStringLength($s)
    {
        if($this->CurrentFont['type']=='Type0')
        {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++)
            {
                if (ord($s[$i])<128)
                    $len++;
                else
                {
                    $len++;
                    $i++;
                }
            }
            return $len;
        }
        else
            return strlen($s);
    }

}



function datos($datos){
 
        $this->SetXY(90,105);
        $this->SetFont('Arial','',12);
        foreach ($datos as $columna)
        {
            $this->Cell(65,7,utf8_decode($columna['Nombre']),'TRB',2,'L' );
            $this->Cell(65,7,utf8_decode($columna['ApellidoPat']),'TRB',2,'L' );
            $this->Cell(65,7,utf8_decode($columna['ApellidoMat']),'TRB',2,'L' );
            $this->Cell(65,7,utf8_decode($columna['Matricula']),'TRB',2,'L' );
            $this->Cell(65,7,utf8_decode($columna['Puesto']),'TRB',2,'L' );
        }
    }
 
 

function cabecera($cabecera){
        $this->SetXY(50,105);
        $this->SetFont('Arial','B',15);
        foreach($cabecera as $columna)
        {
            $this->Cell(40,7,$columna,1, 2 , 'L' ) ;
        }
    } 




 function tabla($cabecera,$datos){
        $this->cabecera ($cabecera) ;
        $this->datos($datos);
    }
 



?>