<?php

include'funcs/conexion.php"';

$cedula=trim($_POST ["cedula"]);
$nombres=trim($_POST ["nombres"]);
$apellidos=trim($_POST ["apellidos"]);
$correo=trim($_POST ["correo"]);
$numeroTelfC=trim($_POST ["numeroTelfC"]);
$telfCasa=trim($_POST ["telfCasa"]);




$provinciasUsu=trim($_POST ["provinciasUsu"]);
$cantones=trim($_POST ["cantones"]);
$parroquia=trim($_POST ["parroquia"]);
$domicilio=trim($_POST ["domicilio"]);
$genero=trim($_POST ["genero"]);
$nacionalidad=trim($_POST ["nacionalidad"]);
$grupoEtnico=trim($_POST ["grupoEtnico"]);
$atencionPrioritaria=trim($_POST ["atencionPrioritaria"]);


$personaJuridica=trim($_POST ["personaJuridica"]);
$repLegal=trim($_POST ["repLegal"]);
$nombreAbo=trim($_POST ["nombreAbo"]);
$telfOficinaAb=trim($_POST ["telfOficinaAb"]);
$telfCelularAb=trim($_POST ["telfCelularAb"]);
$casilla=trim($_POST ["casilla"]);
$cuantia=trim($_POST ["cuantia"]);


$cedulaIn=trim($_POST ["cedulaIn"]);
$nombresIn=trim($_POST ["nombresIn"]);
$apellidosIn=trim($_POST ["apellidosIn"]);
$correoIn=trim($_POST ["correoIn"]);
$numeroTelfCIn=trim($_POST ["numeroTelfCIn"]);
$telfCasaIn=trim($_POST ["telfCasaIn"]);

$provinciasIn=trim($_POST ["provinciasIn"]);
$cantonesIn=trim($_POST ["cantonesIn"]);

$provinciasIn=trim($_POST ["provinciasIn"]);
$cantonesIn=trim($_POST ["cantonesIn"]);


$parroquiaIn=trim($_POST ["parroquiaIn"]);
$direccioDomIn=trim($_POST ["direccioDomIn"]);
$generoIn=trim($_POST ["generoIn"]);
$nacionalidadIn=trim($_POST ["nacionalidadIn"]);
$etnicoIn=trim($_POST ["etnicoIn"]);
$atencionPrioritariaIn=trim($_POST ["atencionPrioritariaIn"]);
$personaJuridicaIn=trim($_POST ["personaJuridicaIn"]);
$repLegalIn=trim($_POST ["repLegalIn"]);
$nombreAboIn=trim($_POST ["nombreAboIn"]);
$telefOficinaInAb=trim($_POST ["telefOficinaInAb"]);
$telfCelularInAb=trim($_POST ["telfCelularInAb"]);
$casillaIn=trim($_POST ["casillaIn"]);
$cuantiaIn=trim($_POST ["cuantiaIn"]);

$materia=trim($_POST ["materia"]);
$materia1=trim($_POST ["materia1"]);

$fecha=trim($_POST ["fecha"]);
$numeroEpxSolicitud=trim($_POST ["numeroEpxSolicitud"]);
$conflictoBreveDes=trim($_POST ["conflictoBreveDes"]);
$opcion=trim($_POST ["opcion"]);
$numJuicio=trim($_POST ["numJuicio"]);
$opcion1=trim($_POST ["opcion1"]);
$exaEsp=trim($_POST ["exaEsp"]);


$opcion2=trim($_POST ["opcion2"]);
$nroPrcArv=trim($_POST ["nroPrcArv"]);
$actaMediacion=trim($_POST ["actaMediacion"]);
$a??o=trim($_POST ["a??o"]);
$nroActa=trim($_POST ["nroActa"]);
$nroExp=trim($_POST ["nroExp"]);
$conocioMediacion=trim($_POST ["conocioMediacion"]);




$insertar="INSERT INTO solicitud_mediacion(
cedula,nombres,
apellidos,correo,
numeroTelfC,telfCasa,
provinciasUsu,cantones,
parroquia,domicilio,
genero,nacionalidad,
grupoEtnico,atencionPrioritaria,
personaJuridica,repLegal,
nombreAbo,telfOficinaAb,
telfCelularAb,casilla,
cuantia,cedulaIn,
nombresIn,apellidosIn,
correoIn,numeroTelfCIn,
telfCasaIn,provinciasIn,
cantonesIn,parroquiaIn,
direccioDomIn,generoIn,
nacionalidadIn,etnicoIn,
atencionPrioritariaIn,personaJuridicaIn,
repLegalIn,nombreAboIn,telefOficinaInAb,
telfCelularInAb,casillaIn,cuantiaIn,
materia,materia1,fecha,
numeroEpxSolicitud,conflictoBreveDes,
opcion,numJuicio,opcion1,
exaEsp,opcion2,
nroPrcArv,actaMediacion,a??o,nroActa,nroExp,conocioMediacion)
 

VALUES ('$cedula','$nombres','$apellidos','$correo','$numeroTelfC','$telfCasa','$provinciasUsu','$cantones','$parroquia',
'$domicilio','$genero','$nacionalidad','$grupoEtnico','$atencionPrioritaria','$personaJuridica','$repLegal',
'$nombreAbo','$telfOficinaAb','$telfCelularAb','$casilla','$cuantia','$cedulaIn','$nombresIn','$apellidosIn','$correoIn',
'$numeroTelfCIn','$telfCasaIn','$provinciasIn','$cantonesIn','$parroquiaIn','$direccioDomIn','$generoIn','$nacionalidadIn',
'$etnicoIn','$atencionPrioritariaIn','$personaJuridicaIn','$repLegalIn','$nombreAboIn','$telefOficinaInAb','$telfCelularInAb',
'$casillaIn','$cuantiaIn','$materia','$materia1','$fecha','$numeroEpxSolicitud','$conflictoBreveDes','$opcion',

'$numJuicio','$opcion1','$exaEsp','$opcion2','$nroPrcArv','$actaMediacion','$a??o','$nroActa','$nroExp','$conocioMediacion')";
$resultado= mysqli_query($conexion,$insertar);





require('../reportes/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de p??gina
function Header()
{
    // Logo
   $this->Image('../img/core-img/log.png',15,8,33);
    $this->Image('../img/core-img/linea.jpg',10,20,192);
    // Arial bold 15
    $this->SetFont('Arial','B',9);
    // Movernos a la derecha
    $this->Cell(80);
    // T??tulo
    $this->Cell(150,10,utf8_decode('CENTRO DE MEDIACI??N PASAJE 2021'),0,0,'C');
    // Salto de l??nea
    $this->Ln(20);
}

// Pie de p??gina
function Footer()
{
    // Posici??n: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // N??mero de p??gina
    $this->Cell(0,10,utf8_decode('P??gina ').$this->PageNo().'/{nb}',0,0,'C');
}
}


$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(200,5,utf8_decode('SOLICITUD PARA LA AUDIENCIA DE MEDIACI??N'),0,1,'C');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5,utf8_decode('La mediaci??n es un procedimiento de soluci??n de conflictos, por el cual las partes asistidas por un tercero neutral llamado mediador, procuran un acuerdo voluntario de beneficio mutuo que verse sobre materia transigible, de car??cter extrajudicial y definitivo, que ponga fin al conflicto, con la misma validez que la sentencia de un juez o jueza, sin la necesidad de acudir a instancias judiciales.'));

require '../funcs/conexion.php';
$cedula=trim($_POST ["cedula"]);
$consulta = ("SELECT * FROM  solicitud_mediacion where cedula='$cedula'");
$resultado = $conexion->query ($consulta);
$pdf->SetFont('Arial','',11);
$pdf->Ln(-35);
while($row=$resultado ->fetch_assoc()){
	$pdf->Ln(40);
	
	$pdf->cell(65,10,'Ciudad:__________ ',0,0,'I',0);
	$pdf->cell(-80,10, $row['cantones'],0,0,'C',0);
	
	$pdf->cell(210,10,'Fecha:____________',0,0,'C',0);
	$pdf->cell(-200,10, $row['fecha'],0,0,'C',0);
	
	$pdf->cell(320,10,'Expediente Nro:________________',0,0,'C',0);
	$pdf->cell(-290,10, $row['numeroEpxSolicitud'],0,1,'C',0);
	
	$pdf->cell(50,10,'Yo,_______________________________________________________',0,0,'D',0);
	$pdf->cell(-50,10, $row['nombres'],0,0,'C',0);
	$pdf->cell(150,10, $row['apellidos'],0,0,'C',0);
	
	$pdf->cell(20,10,utf8_decode('Solicito una mediaci??n con el/la'),0,1,'C',0);
	$pdf->cell(790,10,utf8_decode('se??or/a________________________________________________________________'),0,1,'D',0);
	
	$pdf->cell(150,-10, $row['apellidosIn'],0,1,'C',0);
	$pdf->cell(70,10, $row['nombresIn'],0,0,'C',0);
	$pdf->cell(200,10,utf8_decode(', con la finalidad de'),0,1,'C',0);
	
	$pdf->cell(200,10,utf8_decode('llegar a un acuerdo en :(breve determinacion del conflicto:)'),0,1,'D',0);
	$pdf->MultiCell(190,5,utf8_decode( $row['conflictoBreveDes']));
	$pdf->Ln(15);
	$pdf->cell(190,10,'Materia de Mediacion:',0,0,'I',0);	
	$pdf->cell(-262,10, $row['materia'],0,1,'C',0);	
	
	$pdf->cell(190,5,utf8_decode('Casos sujetos a Mediacion:'),0,0,'I',0);	
	$pdf->cell(-150,5,utf8_decode($row['materia1']),0,1,'C',0);
	
	$pdf->cell(190,15,utf8_decode('Por lo que a continuaci??n detallo los siguientes datos:'),0,1,'D',0);
	$pdf->SetFont('Arial','B',11);
	$pdf->cell(190,5,'DATOS DEL SOLICITANTE',0,1,'C',0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',11);
	$pdf->cell(38,5,'Nombres Completos:______________________________________________________________________',0,0,'I',0);
	$pdf->cell(57,5, $row['nombres'],0,0,'C',0);
	$pdf->cell(10,5, $row['apellidos'],0,1,'C',0);
	
	$pdf->cell(38,10,'P. Juridica Empresa:______________________________________________________________________',0,0,'I',0);
	$pdf->cell(35,10, $row['personaJuridica'],0,1,'C',0);
	
	$pdf->cell(38,10,'Representante Legal:______________________________________________________________________',0,0,'I',0);
	$pdf->cell(35,10, $row['repLegal'],0,1,'C',0);
	
	
	$pdf->cell(38,10,'Nacionalidad:____________________________________________________________________________',0,0,'I',0);
	$pdf->cell(49,10, $row['nacionalidad'],0,1,'C',0);
	
	$pdf->cell(38,10,'Genero:_________________________________________________________________________________',0,0,'I',0);
	$pdf->cell(47,10, $row['genero'],0,1,'C',0);
	
	$pdf->cell(38,10,'Grupo Etnico:____________________________________________________________________________',0,0,'I',0);
	$pdf->cell(47,10, $row['grupoEtnico'],0,1,'C',0);
	
	$pdf->cell(38,10,'Atencion Prioritaria:_______________________________________________________________________',0,0,'I',0);
	$pdf->cell(70,10, $row['atencionPrioritaria'],0,1,'C',0);
	$pdf->Ln(15);
	$pdf->cell(38,10,'Cedula:___________________________________________________________________________________',0,0,'I',0);
	$pdf->cell(50,10, $row['cedula'],0,1,'C',0);
	
	
	
	$pdf->cell(38,10,'Parroquia:_________________________________________________________________________________',0,0,'I',0);
	$pdf->cell(55,10, $row['parroquia'],0,1,'C',0);
	
	
	$pdf->cell(38,10,'Direccion Domiciliaria:_______________________________________________________________________',0,0,'I',0);
	$pdf->cell(55,10, $row['domicilio'],0,1,'C',0);
	
	
	$pdf->cell(38,10,'Telefono Casa:_____________________________________________________________________________',0,0,'I',0);
	$pdf->cell(55,10, $row['telfCasa'],0,1,'C',0);
	
	
	$pdf->cell(38,10,'Telefono Celular:__________________________________________________________________________',0,0,'I',0);
	$pdf->cell(55,10, $row['numeroTelfC'],0,1,'C',0);
	
	$pdf->cell(38,10,'Nombre de Abogado en caso de Existir:_______________________________________________________',0,0,'I',0);
	$pdf->cell(120,10, $row['nombreAbo'],0,1,'C',0);
	$pdf->cell(38,10,'Telefono de la oficina del abogado:__________________________________________________________',0,0,'I',0);
	$pdf->cell(100,10, $row['telfOficinaAb'],0,1,'C',0);
	$pdf->cell(38,10,'Telefono del Celular del abogado:__________________________________________________________',0,0,'I',0);
	$pdf->cell(100,10, $row['telfCelularAb'],0,1,'C',0);

	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','B',11);
	$pdf->cell(190,5,'DATOS DEL INVITADO',0,1,'C',0);
	
	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',11);
	$pdf->cell(38,5,'Nombres Completos:______________________________________________________________________',0,0,'I',0);
	$pdf->cell(57,5, $row['nombresIn'],0,0,'C',0);
	$pdf->cell(10,5, $row['apellidosIn'],0,1,'C',0);
	
	$pdf->cell(38,10,'P. Juridica Empresa:______________________________________________________________________',0,0,'I',0);
	$pdf->cell(35,10, $row['personaJuridicaIn'],0,1,'C',0);
	
	$pdf->cell(38,10,'Representante Legal:______________________________________________________________________',0,0,'I',0);
	$pdf->cell(35,10, $row['repLegalIn'],0,1,'C',0);
	
	$pdf->cell(38,10,'Nacionalidad:____________________________________________________________________________',0,0,'I',0);
	$pdf->cell(49,10, $row['nacionalidadIn'],0,1,'C',0);
	
	$pdf->cell(38,10,'Genero:_________________________________________________________________________________',0,0,'I',0);
	$pdf->cell(47,10, $row['generoIn'],0,1,'C',0);
	
	$pdf->cell(38,10,'Grupo Etnico:____________________________________________________________________________',0,0,'I',0);
	$pdf->cell(47,10, $row['etnicoIn'],0,1,'C',0);
	
	$pdf->cell(38,10,'Atencion Prioritaria:_______________________________________________________________________',0,0,'I',0);
	$pdf->cell(70,10, $row['atencionPrioritariaIn'],0,1,'C',0);
	
	$pdf->cell(38,10,'Cedula:___________________________________________________________________________________',0,0,'I',0);
	$pdf->cell(50,10, $row['cedulaIn'],0,1,'C',0);
	
	
	
	$pdf->cell(38,10,'Parroquia:_________________________________________________________________________________',0,0,'I',0);
	$pdf->cell(55,10, $row['parroquiaIn'],0,1,'C',0);
	
	
	$pdf->cell(38,10,'Direccion Domiciliaria:_______________________________________________________________________',0,0,'I',0);
	$pdf->cell(55,10, $row['direccioDomIn'],0,1,'C',0);
	
	
	$pdf->cell(38,10,'Telefono Casa:___________________________________________________________________________',0,0,'I',0);
	$pdf->cell(55,10, $row['telfCasa'],0,1,'C',0);
	
	
	$pdf->cell(38,10,'Telefono Celular:_____________________________________________________________________________',0,0,'I',0);
	$pdf->cell(55,10, $row['numeroTelfC'],0,1,'C',0);
	
	
	$pdf->cell(38,10,'Nombre de Abogado en caso de Existir:_______________________________________________________',0,0,'I',0);
	$pdf->cell(120,10, $row['nombreAboIn'],0,1,'C',0);
	$pdf->cell(38,10,'Telefono de la oficina del abogado:__________________________________________________________',0,0,'I',0);
	$pdf->cell(100,10, $row['telefOficinaInAb'],0,1,'C',0);
	$pdf->cell(38,10,'Telefono del Celular del abogado:__________________________________________________________',0,0,'I',0);
	$pdf->cell(100,10, $row['telfCelularInAb'],0,1,'C',0);
	
	$pdf->Ln(10);
	$pdf->cell(175,5,'Informo que respecto al asunto que describo en la presente solicitud, existe 
	juicio pendiente:',0,1,'I',0);
	$pdf->cell(53,10, $row['opcion'],0,0,'D',0);
	$pdf->cell(5,10,'__________________________________________________',0,0,'C',0);
	$pdf->cell(38,10,'Juicio Nro:',0,0,'D',0);
	$pdf->cell(-10,10, $row['numJuicio'],0,1,'C',0);
	
	$pdf->Ln(10);
	
	$pdf->MultiCell(190,10,utf8_decode('Informo que respecto al asunto que describo en la presente solicitud existe examen especial o de auditor??a realizado por la Contralor??a General del Estado:'));
	$pdf->cell(53,10, $row['opcion1'],0,0,'D',0);
	$pdf->cell(5,10,'___________________________________________________',0,0,'C',0);
	$pdf->cell(-10,10,'Examen Especial Nro:',0,0,'C',0);
	$pdf->cell(75,10,utf8_decode( $row['exaEsp']),0,1,'C',0);
	
	
	
	$pdf->Ln(10);
	
	$pdf->MultiCell(500,10,utf8_decode('Informo que respecto al asunto que describo en la presente solicitud, existe proceso arbitral:'));
	$pdf->cell(53,10, $row['opcion2'],0,0,'D',0);
	$pdf->cell(5,10,'___________________________________________________',0,0,'C',0);
	$pdf->cell(-10,10,'Proceso Arbitral Nro:',0,0,'C',0);
	$pdf->cell(75,10,utf8_decode( $row['nroPrcArv']),0,1,'C',0);
	
	
	
	$pdf->MultiCell(180,10,utf8_decode('Informo que respecto al asunto que describo en la presente solicitud, existe un acta de mediaci??n suscrita con anterioridad a la presente solicitud:'));
	$pdf->cell(53,10, $row['actaMediacion'],0,1,'D',0);
	
	
	$pdf->cell(10,10,utf8_decode('A??o:_________________'),0,0,'D',0);
	$pdf->cell(10,10, $row['a??o'],0,1,'C',0);
	
	$pdf->cell(45,10,utf8_decode('N??mero de Acta:___________________'),0,0,'D',0);
	
	$pdf->cell(70,10, $row['nroActa'],0,1,'D',0);
	
	
	$pdf->cell(35,10,utf8_decode('N??mero de Expediente:______________'),0,0,'D',0);
	$pdf->cell(45,10,utf8_decode( $row['nroExp']),0,1,'C',0);
	
	
		$pdf->Ln(10);
	
	$pdf->cell(190,5,utf8_decode('??C??mo conoci?? del servicio de mediaci??n?'),0,1,'D',0);
	$pdf->cell(5,10,'___________________________________________________',0,0,'D',0);
	$pdf->cell(15,10, $row['conocioMediacion'],0,1,'D',0);
	
	
	
	$pdf->SetFont('Arial','B',11);
	$pdf->cell(200,25,utf8_decode('Nombres, Apellidos y Firma del o la Solicitante'),0,1,'C',0);
	$pdf->SetFont('Arial','',11);
	$pdf->cell(200,5,utf8_decode('_________________________________________'),0,1,'C',0);
	
	$pdf->cell(160,5, $row['nombres'],0,0,'C',0);
	$pdf->cell(-80,5, $row['apellidos'],0,1,'C',0);
	$pdf->SetFont('Arial','B',11);
	$pdf->cell(200,10,utf8_decode('N??mero de Cedula'),0,1,'C',0);
	$pdf->SetFont('Arial','',11);
	$pdf->cell(200,10, $row['cedula'],0,0,'C',0);
	
	
	

	
	}

 
$pdf->Output();


?>




