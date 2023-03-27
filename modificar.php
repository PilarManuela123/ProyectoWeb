<?php
  require 'basededatos/conexion.php';

    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }


    if ( !empty($_POST)) {

        $nombreError = null;
        $apellidoError = null;
        $emailError = null;
        $suscritoError = null;


        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $suscrito = $_POST['suscrito'];


        $valid = true;
        if (empty($nombre)) {
            $nombreError = 'Por favor ingrese Nombre';
            $valid = false;
        }

        if (empty($apellido)) {
            $apellidoError = 'Por favor ingrese Apellido';
            $valid = false;
        }

        if (empty($email)) {
            $emailError = 'Por favor ingrese Correo';
            $valid = false;
        } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
            $emailError = 'Verifique la estructura del correo';
            $valid = false;
        }


        if ($suscrito != 'Si') {
            $suscrito = 'No';
        }


        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE pacientes set nombre=?, apellido=?, correo=?, suscrito=? WHERE id=?";
            $q = $pdo->prepare($sql);
            $q->execute([$nombre,$apellido,$email,$suscrito,$id]);
            Database::disconnect();
            header("Location: verpacientes.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM pacientes where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $email = $data['correo'];
        $suscrito = $data['suscrito'];
        Database::disconnect();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

                <div class="span10 offset1">
                    <div class="row">
                        <h3>Modificar los datos de pacientes</h3>
                    </div>

                    <form class="form-horizontal" action="modificar.php?id=<?php echo $id?>" method="post">
                      <div class="control-group <?php echo !empty($nombreError)?'error':'';?>">
                        <label class="control-label">Nombre</label>
                        <div class="controls">
                            <input name="nombre" type="text"  value="<?php echo !empty($nombre)?$nombre:'';?>">
                            <?php if (!empty($nombreError)): ?>
                                <span class="help-inline"><?php echo $nombreError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($apellidoError)?'error':'';?>">
                        <label class="control-label">Apellido</label>
                        <div class="controls">
                            <input name="apellido" type="text"  value="<?php echo !empty($apellido)?$apellido:'';?>">
                            <?php if (!empty($apellidoError)): ?>
                                <span class="help-inline"><?php echo $apellidoError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Correo electrónico</label>
                        <div class="controls">
                            <input name="email" type="text" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Suscrito</label>
                        <div class="controls">
                            <input name="suscrito" type="checkbox" <?php if ($suscrito == 'Si') { echo 'checked'; } ?> value="Si">
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Modificar</button>

                        </div>
                    </form>
                </div>

    </div> 
  </body>
</html>
