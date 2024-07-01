<?php
include '../BD/Conexion.php'; // Incluye el archivo de conexion a la base de datos
require 'CrudTransaccionModel.php'; // Incluye
 $IdTransaccion = $_GET['ID_TRANSACCION'];
$TransaccionModel = new TransaccionModel($conn);

$result = $TransaccionModel->DeleteTransacciones($IdTransaccion , $conn);
if ($result) {
    header('Location: ../../src/Transaccion.php?success=TransaccionDeletedSuccessfully');
} else {
    header('Location: ../../src/Transaccion.php?error=TransaccionNotDeletedSuccessfull');
}

    $conn->close();

?>


