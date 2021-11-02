<?php

require "config.php";

if(isset($POST['submit'])){
    $nuevo_usuario = array(
    "nombre"=> $_POST['nombre'],
    "apellidos"=> $_POST['apellidos'],
    "email"=> $_POST['email'],
    "username"=> $_POST['username'],
    )

    $sql ="INSERT INTO users (nombre, apellidos, email, username)
        values (:nombre, :apellidos, :email, :username)";

    try {
        $estado = $conexion ->prepare($sql);
        $estado->execute($nuevo_usuario);
    } catch (PDOExecption $th) {$th->getMessage();}
}
?>

<?php if (isset($_POST['submit']) && $estado) : ?>
    <div class="card">
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>
              <?php echo $_POST['username']; ?>
              se ha añadido correctamente.
          </p>
          <footer class="blockquote-footer">Footer<cite title="Source title">Source title</cite></footer>
        </blockquote>
      </div>
    </div>
<?php endif ?>

<h2>Añade un usuario</h2>
<div class="mb-3">
  <label for="" class="form-label"></label>
  <input type="text|password|email|number|submit|date|datetime|datetime-local|month|color|range|search|tel|time|url|week" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>
