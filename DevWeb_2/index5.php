<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
    <header>
    <h1>Hospital Militar</h1>
    <p>Diseño Web II - 12 BTP Informática</p>
    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="form_pacientes.html">Pacientes</a></li>
            <li><a href="form_citas.html">Citas</a></li>
            <li><a href="form_especialidades.html">Especialidades</a></li>
            <li><a href="form_historial_medico.html">Historial Médico</a></li>
            <li><a href="form_medicos.html">Médicos</a></li>
        </ul>
    </nav>
    </header>
<div class="container">
    <form action="guardar_datos.php" method="POST">
        <h2>Registro Pacientes</h2><br>
        <input type="text" name="id_paciente" placeholder="Inserte ID" required><br>
        <input type="text" name="Nombre" placeholder="Tu Nombre" required><br>
        <input type="text" name="fecha_nacimiento" placeholder="Tu Fecha de nacimiento" required><br>
        <input type="text" name="direccion" placeholder=" Tu direccion" required><br>
        <input type="email" name="telefono" placeholder=" Tu Telefono" required><br>
        <input type="email" name="correo" placeholder=" Tu Correo" required><br>
        <button type="submit">Enviar</button><br>
    </form>
</div>
          <footer>
    <p>&copy; 2025 Repaso HTML CSS. Todos los derechos reservados.</p>
    <p>LMH - Programación</p>
    <p>📧 Contacto: <a href="mailto:Jennifer.tops2006@gmail.com">Jennifer.tops2006@gmail.com</a></p>
  </footer>
</body>
</html>