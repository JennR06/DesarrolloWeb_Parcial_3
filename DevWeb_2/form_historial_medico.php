<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Medico</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_2.css">
</head>
<nav class="nav-bar"> 

    <ul> 
        <li><a href="index.php">Hospital Militar</a></li>
        <li><a href="form_pacientes.php">Pacientes</a></li>
        <li><a href="form_citas.php">Citas</a></li>
        <li><a href="form_especialidades.php">Especialidades</a></li>
        <li><a href="form_historial_medico.php">Historial Médico</a></li>
        <li><a href="form_medicos.php">Médicos</a></li>
    </ul>
</nav>

<body>
    <div class="container">
        <h1>Form Medicos</h1>
        <form>
            <div class="form-group">
                <label for="idMedico">Id Medico</label>
                <input type="text" id="idMedico">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre">
            </div>
            <div class="form-group">
                <label for="especialidad">Especialidad</label>
                <input type="text" id="especialidad">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" id="correo">
            </div>
            <button type="submit" class="btn-enviar">Enviar</button>
        </form>
    </div>
</body>
</html>