<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador - Agencia de Viajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo CSS externo -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="d-flex flex-column" style="min-height: 100vh;">

    <!-- Barra lateral de navegación -->
    <div class="sidebar bg-dark text-white p-3" style="width: 200px; position: fixed; height: 100%;">
        <h4 class="text-center">Panel de Admin</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link text-white" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Gestión de Usuarios</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Destinos</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Vuelos</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Reservas</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Reportes</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Configuración</a></li>
        </ul>
    </div>

    <!-- Contenido principal -->
    <div class="content" style="margin-left: 220px;">
        <div class="container-fluid mt-3">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Dashboard</h2>
                <button class="btn btn-primary" id="newButton">Nuevo</button>
            </div>

            <!-- Tarjetas de estadísticas -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card bg-primary text-white card-stats">
                        <div class="card-body">
                            <h5 class="card-title">Usuarios</h5>
                            <h3>150</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white card-stats">
                        <div class="card-body">
                            <h5 class="card-title">Destinos</h5>
                            <h3>25</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-dark card-stats">
                        <div class="card-body">
                            <h5 class="card-title">Vuelos</h5>
                            <h3>80</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger text-white card-stats">
                        <div class="card-body">
                            <h5 class="card-title">Reservas</h5>
                            <h3>120</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabla de gestión de usuarios -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Gestión de Usuarios</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Juan Pérez</td>
                                <td>juan@example.com</td>
                                <td>Administrador</td>
                                <td>
                                    <button class="btn btn-warning btn-sm editButton">Editar</button>
                                    <button class="btn btn-danger btn-sm deleteButton">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white p-3 mt-auto" style="margin-left: 220px;">
        <p>&copy; Agencia de Viajes Travell, 2024</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        // Función para el botón "Nuevo"
        document.getElementById('newButton').addEventListener('click', function() {
            Swal.fire({
                title: 'Crear nuevo elemento',
                text: 'Funcionalidad para agregar un nuevo registro.',
                icon: 'info',
                confirmButtonText: 'Aceptar'
            });
        });

        // Función para botones "Editar"
        document.querySelectorAll('.editButton').forEach(button => {
            button.addEventListener('click', function() {
                Swal.fire({
                    title: 'Editar Usuario',
                    text: 'Funcionalidad para editar el registro.',
                    icon: 'info',
                    confirmButtonText: 'Aceptar'
                });
            });
        });

        // Función para botones "Eliminar"
        document.querySelectorAll('.deleteButton').forEach(button => {
            button.addEventListener('click', function() {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás revertir esta acción.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, eliminar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Eliminado',
                            'El usuario ha sido eliminado.',
                            'success'
                        );
                    }
                });
            });
        });
    </script>
</body>
</html>
