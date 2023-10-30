<?php require('layout/header.php') ?>
</div>
</div>
<main>
  <div class="login-box">
    <h2>Bienvenido</h2>
    <form id="loginForm" action="./index.html" method="post" onsubmit="return validarFormulario()">
      <div class="user-box">
        <input type="email" class="form-control form-control-user" name="correo" value="">
        <label>Usuario</label>
      </div>
      <div class="user-box">
        <input type="password" class="form-control form-control-user" name="clave" id="contraseña" value="">
        <label>Contraseña</label>
      </div>
      <div class="login-actions">
        <button id="boton" class="btn btn-primary btn-block btn-user gradient-button" type="submit">Ingresar</button>
      </div>
      <div class="registrarse">
        <a href="/registrar.html" class="btn btn-secondary btn-block btn-user gradient-button">Registrarse</a>
      </div>
      <div class="login-action">
        <a href="/recuperar_contraseña.html" class="btn btn-secondary btn-block btn-user gradient-button">Recuperar
          contraseña</a>
      </div>

    </form>
  </div>


  <!-- Agrega las referencias a los archivos JavaScript aquí -->
  <script>"script.js"</script>
</main>
</body>

</html>
<?php require ('layout/Footer.php') ?>