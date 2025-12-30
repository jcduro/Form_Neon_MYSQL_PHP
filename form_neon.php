 <!-- Welcome to
  
     |  ___|  __ \  |   |  _ \   _ \   
     | |      |   | |   | |   | |   |  
 \   | |      |   | |   | __ <  |   |  
\___/ \____| ____/ \___/ _| \_\\___/   
                                       
  ___|  _ \  __ \  ____|    _ )   _ _| __ \  ____|    \     ___|  
 |     |   | |   | __|     _ \ \   |  |   | __|     _ \  \___ \  
 |     |   | |   | |      ( `  <   |  |   | |      ___ \       | 
\____|\___/ ____/ _____| \___/\/ ___|____/ _____|_/    _\_____/  

  https://jcduro.bexartideas.com/index.php | 2026 | JC Duro Code & Ideas

------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario Neon</title>
  <link rel="stylesheet" href="css/form_neon.css">
</head>
<body>
  


        <main>


<center>
  <div class="form-container">
    <h2>Registro Neon</h2>
    <form action="/proyectos/dashjc/form_neon/procesar.php" method="POST">
      <label>Nombre Completo</label>
      <input type="text" name="nombre" required>

      <label>Correo Electrónico</label>
      <input type="email" name="correo" required>

      <label>Teléfono</label>
      <input type="tel" name="telefono" required>

      <label>País</label>
      <select id="pais" name="pais" required>
        <option value="">-- Selecciona un país --</option>
      </select>

      <label>Ciudad</label>
      <select id="ciudad" name="ciudad" required>
        <option value="">-- Selecciona una ciudad --</option>
      </select>

      <label>
        <input type="checkbox" name="terminos" required>
        Acepto términos y condiciones
      </label>

      <button type="submit">Enviar</button>
    </form>
  </div>



  <!-- Listado neon -->
<section class="listado-neon">
  <h3>Últimos registros</h3>
  <div id="lista-registros">Cargando...</div>
</section>



</main>


  <script src="js/form_neon.js"></script>
</body>
</html>

