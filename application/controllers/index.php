<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        date_default_timezone_set('America/Argentina/Buenos_Aires'); 
        $this->load->model('Carta_model');
	}

	public function index()
	{
		$this->load->view('estructura/header');
		$this->load->view('cuerpo_index');
		$this->load->view('estructura/footer');
	}

	public function exportar_pdf() 
	{
        $carne = $this->Carta_model->traer_menus_por_tipo('Carne');
        $pastas= $this->Carta_model->traer_menus_por_tipo('Pastas');
        $guarniciones= $this->Carta_model->traer_menus_por_tipo('Guarniciones');
        $dietetica= $this->Carta_model->traer_menus_por_tipo('Linea dietetica');


        $this->load->library('Pdf');
        //$pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
        $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Moron Catering Services');
        $pdf->SetTitle('Moron Catering Services - Excelencia en comidas empresariales');
        $pdf->SetSubject('Tesoreria');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
 
    // datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE , PDF_HEADER_STRING, array(76, 71, 68), array(76, 71, 68));
        $pdf->setFooterData($tc = array(76, 71, 68), $lc = array(76, 71, 68));
 
    // datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
    // se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
    // se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
    // se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
    //relación utilizada para ajustar la conversión de los píxeles
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
 
    // ---------------------------------------------------------
    // establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);
 
    // Establecer el tipo de letra
 
    //Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
    //  para reducir el tamaño del archivo.
        $pdf->SetFont('Helvetica', '', 12, '', true);
 
    // Añadir una página
    // Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();
 
    //fijar efecto de sombra en el texto
        //$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

        $html = "<style type=text/css>";
        $html .= "table{  background-color:blue }";
        $html .= "div{ width:5em;  background-color:red}";
        $html .= "</style>";

        $html .= "<table>";
        $html .= "<tr>";
        $html .= "  <td>"; // --------------------------------------- CARNE --------------------------------------
                      
                        $html .= "<h4> CARNE </h4>";
                        
                        $html .= "<table>";

                        foreach ($carne->result() as $row) {
                            $html .= "<tr>";
                            $html .= "<td>".$row->menu."</td>";    
                            $html .= "<td>".$row->precio."</td>";   
                            $html .= "</tr>";
                        }

                        $html .= "</table>";
        $html .= "  </td>";

        $html .= "  <td>"; // --------------------------------------- PASTAS --------------------------------------
                      
                        $html .= "<h4> PASTAS </h4>";
                        
                        $html .= "<table>";

                        foreach ($pastas->result() as $row) {
                            $html .= "<tr>";
                            $html .= "<td>".$row->menu."</td>";    
                            $html .= "<td>".$row->precio."</td>";   
                            $html .= "</tr>";
                        }

                        $html .= "</table>";
        $html .= "  </td>";
        $html .= "</tr>";

        $html .= "<tr>";
        $html .= "  <td>"; // --------------------------------------- GUARNICIONES --------------------------------------
                      
                        $html .= "<h4> GUARNICIONES </h4>";
                        
                        $html .= "<table>";

                        foreach ($guarniciones->result() as $row) {
                            $html .= "<tr>";
                            $html .= "<td>".$row->menu."</td>";    
                            $html .= "<td>".$row->precio."</td>";   
                            $html .= "</tr>";
                        }

                        $html .= "</table>";
        $html .= "  </td>";

        $html .= "  <td>"; // --------------------------------------- LINEA DIETETICA   --------------------------------------
                      
                        $html .= "<h4> LINEA DIETETICA </h4>";
                        
                        $html .= "<table>";

                        foreach ($dietetica->result() as $row) {
                            $html .= "<tr>";
                            $html .= "<td>".$row->menu."</td>";    
                            $html .= "<td>".$row->precio."</td>";   
                            $html .= "</tr>";
                        }

                        $html .= "</table>";
        $html .= "  </td>";
        $html .= "</tr>";


        $html .= "</table>";

      

        /*
        // Informacion de los cursos del profesor
       
       $profesores_cursos = $this->Profesor_model->traer_cursos_profesor($id_profesor);
       $nombre_profesor = $this->Programas_model->traer_profesor($id_profesor);
        
        if( $this->Profesor_model->fulltime($id_profesor) == 1 )
            $tipo_profesor= "Full Time";   
        else
            $tipo_profesor = "Part Time";

         $html .= "<div style='float:right;' ><h6 >Fecha: ".date('d/m/Y').".</h6></div>";
        $html .= "<h4>Profesor: ".utf8_encode($nombre_profesor->D_APELLIDOS).", ".utf8_encode($nombre_profesor->D_NOMBRES).".</h4>";
        $html .= "<h5>&#8226; Tipo de Profesor: ".$tipo_profesor.".<h5>";
        $html .= "<h5>&#8226; Cantidad de cursos: ".$profesores_cursos->num_rows().".<h5>";
        
        $html .= "<div class='table-responsive' >";  
        $html .= "<table  border='1' >";
        $html .= " 
                        <tr>
                            <th style='background-color:red;'>Programa</th>
                            <th>Materia</th>
                            <th>Tipo Clase</th>
                            <th>Rol</th>
                            <th>F. Inicio</th>
                        </tr>
                   ";          
                    
                    foreach ( $profesores_cursos->result() as $row ):
                        $html .= " <tr class='odd gradeX' style='font-weight:bold;'>";   
                            $html .= " <td>".utf8_encode($row->PROGRAMA)."</td>";
                            $html .= " <td>".utf8_encode($row->D_DESCRED)."</td>";
                            $html .= " <td>".utf8_encode($row->C_TIPO_CLASE)."</td>";
                            $html .= " <td>".utf8_encode($row->C_ROL)."</td>";
                            $html .= " <td>".utf8_encode($row->FECHA_INI)."</td>";
                        $html .= " </tr>";
                    endforeach;
    $html .= "      ";
    $html .= "   </table>";
    $html .= " </div>"; */
 
    // Imprimimos el texto con writeHTMLCell()
    $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
 
    // ---------------------------------------------------------
    // Cerrar el documento PDF y preparamos la salida
    // Este método tiene varias opciones, consulte la documentación para más información.


        $nombre_archivo = utf8_decode("cursos_profesor.pdf");
        $pdf->Output($nombre_archivo, 'I');
    }
}

/* End of file  */
/* Location: ./application/controllers/ */