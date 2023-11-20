<?php
require_once __DIR__ . '/' . '../models/classes/Conexion.php';
require_once __DIR__ . '/' . '../models/classes/Suscripcion.php';
require_once __DIR__ . '/' . '../models/classes/PlanesMobilatingo.php';



function crear(Conexion $conn, Suscripcion $model, $empresa, $plan, $diasVigencia, $activo)
{    

    $model->crear($conn, $plan, $empresa, $diasVigencia, $activo);
    

}

function listar(Conexion $conn, Suscripcion $model, $empresa)
{
    return $model->listar($conn, $empresa);

}

$michu = $_SESSION['id_empresa'];

$planes = new PlanesMobilatingo();
$suscripcion = new Suscripcion();

if(isset($_POST['controller']))
{
    if($_POST['controller'] == 'comprar')
    {
       crear(new Conexion, $suscripcion, $_POST['empresa'], $_POST['id_plan'], $_POST['dias_vigencia'], 1);
      
       
    }
}

$empresa = isset($_SESSION['id_empresa']) ? $_SESSION['id_empresa'] : $_POST['empresa'];
$listadoRegistros = listar(new Conexion, $suscripcion, $empresa);

if(empty($listadoRegistros))
{
    $listadoPlanes = $planes->listar(new Conexion);
}




?>