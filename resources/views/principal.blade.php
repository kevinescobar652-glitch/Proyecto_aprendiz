<html>

<head>
    <title>Sitema de gestion odontologica</title>
    @vite(['resources/css/estilos.css','resources/css/estilosPlantillas.css'])

</head>

<body>
    <div id="contenedor">
        <div id="encabezado">
            <h1>Sistema de Gestion Odontologica</h1>
        </div>
        <ul id="menu">
            <li><a href="/">Inicio</a></li>
            <li><a href="{{ route('asignar_cita') }}">Asignar</a></li>
            <li><a href="">Consultar Cita</a></li>
            <li><a href="">Cancelar Cita</a></li>
            <li><a href="{{ route('iniciar_sesion') }} ">Iniciar Sesion</a></li>
        </ul>
        <div id="Contenido">
            <h2>Informacion General</h2>
            <p>El Sistema de Gestion Odontologica permite adminitrar la informacion de los pacientes, tratamientos y citas a traves de una interfaz web.</p>
            <p>El sistema cuenta con las siguientes secciones: 
                <ul> 
                    <li>Asignar cita</li>
                    <li>Consultar cita</li>
                    <li>Cancelar cita</li>
                </ul>
            </p>
        </div>
    </div>
</body>
</html>