<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/report-generation.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Generación de Reportes</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#">Dashboard</a>
        <a href="#">Gestión de Usuarios</a>
        <a href="#">Reservas</a>
        <a href="#">Reportes</a>
        <a href="#" class="active">Generar Reporte</a>
        <a href="#">Estadísticas</a>
        <a href="#">Configuración del Sistema</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Generación de Reportes</h2>

        <!-- Report Configuration Section -->
        <div class="report-config">
            <form id="reportForm">
                <div class="form-group">
                    <label for="report-type">Tipo de Reporte:</label>
                    <select id="report-type" class="form-control">
                        <option value="usuarios">Usuarios</option>
                        <option value="reservas">Reservas</option>
                        <option value="ventas">Ventas</option>
                        <option value="actividad">Actividad</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="start-date">Fecha de Inicio:</label>
                    <input type="date" id="start-date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="end-date">Fecha de Fin:</label>
                    <input type="date" id="end-date" class="form-control">
                </div>

                <div class="form-group mt-3">
                    <button type="button" class="btn btn-primary btn-generate" onclick="generateReport()">Generar Reporte</button>
                    <button type="button" class="btn btn-secondary btn-export" onclick="exportReport('pdf')">Exportar a PDF</button>
                    <button type="button" class="btn btn-secondary btn-export" onclick="exportReport('excel')">Exportar a Excel</button>
                </div>
            </form>
        </div>

        <!-- Report Preview Section -->
        <div class="report-preview mt-4">
            <h3>Vista Previa del Reporte</h3>
            <div id="preview-content" class="preview-content border p-3">
                <p>Genera el reporte para verlo aquí.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white p-3 mt-4 text-center">
        <p>&copy; Travell, <span id="currentYear"></span></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mostrar el año actual en el footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // Función para generar el reporte
        function generateReport() {
            const reportType = document.getElementById('report-type').value;
            const startDate = document.getElementById('start-date').value;
            const endDate = document.getElementById('end-date').value;

            if (!startDate || !endDate) {
                Swal.fire('Error', 'Por favor, selecciona una fecha de inicio y fin', 'error');
                return;
            }

            // Aquí se podría realizar una llamada al servidor para obtener el reporte

            // Simulación de vista previa del reporte
            document.getElementById('preview-content').innerHTML = `
                <h5>Reporte de ${reportType.charAt(0).toUpperCase() + reportType.slice(1)}</h5>
                <p>Período: ${startDate} a ${endDate}</p>
                <p><strong>Datos del reporte generados aquí...</strong></p>
            `;
            Swal.fire('Éxito', 'Reporte generado con éxito', 'success');
        }

        // Función para exportar el reporte en formato PDF o Excel
        function exportReport(format) {
            const reportType = document.getElementById('report-type').value;

            Swal.fire({
                title: `¿Exportar reporte en formato ${format.toUpperCase()}?`,
                text: `Estás por exportar el reporte de ${reportType} en formato ${format.toUpperCase()}.`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Sí, exportar',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Aquí se podría implementar la lógica para exportar el reporte
                    Swal.fire('Exportado', `El reporte fue exportado en formato ${format.toUpperCase()}.`, 'success');
                }
            });
        }
    </script>
</body>
</html>
