<div>
    
        <div class="my-6 mx-4 p-8 bg-white rounded-lg shadow-md">
            <h1 class="text-center text-blue-500 text-3xl font-semibold mb-6">Registrar Nueva Denuncia</h1>

            <!-- Mensajes de error -->
            <div class="alert bg-red-500 text-white p-3 rounded-lg mb-4 hidden" id="error-message"></div>

            <form action="/denuncia/store" method="POST" class=" m-10" enctype="multipart/form-data" id="denuncia-form">
                @csrf
                <div class="mb-4">
                    <label for="tipo_tramite" class="block font-semibold">Tipo de Trámite</label>
                    <select id="tipo_tramite" name="tipo_tramite" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                        <option value="Nuevo Trámite">Nuevo Trámite</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="nombre_entidad" class="block font-semibold">Nombre de la Entidad</label>
                    <input type="text" id="nombre_entidad" name="nombre_entidad" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="descripcion_hechos" class="block font-semibold">Descripción de los Hechos</label>
                    <textarea id="descripcion_hechos" name="descripcion_hechos" rows="4" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="fecha_hechos" class="block font-semibold">Fecha de los Hechos</label>
                    <input type="date" id="fecha_hechos" name="fecha_hechos" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="documento" class="block font-semibold">Cargar Formato Único de Registro (FUR) en PDF (OCR)</label>
                    <input type="file" id="documento" name="documento" accept="application/pdf" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="anexos" class="block font-semibold">Cargar Anexos (máximo 5 archivos)</label>
                    <input type="file" id="anexos" name="anexos[]" multiple class="w-full p-2 mt-2 border border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="correo" class="block font-semibold">Correo Electrónico</label>
                    <input type="email" id="correo" name="correo" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="telefono" class="block font-semibold">Teléfono Celular</label>
                    <input type="text" id="telefono" name="telefono" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="direccion" class="block font-semibold">Dirección</label>
                    <input type="text" id="direccion" name="direccion" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600">Registrar Denuncia</button>
            </form>
        </div>

        <script>
            // Validación de formulario
            const form = document.getElementById('denuncia-form');
            const errorMessage = document.getElementById('error-message');

            form.addEventListener('submit', function (event) {
                // Aquí podrías agregar validación adicional de campos si es necesario
                if (!document.getElementById('nombre_entidad').value || !document.getElementById('descripcion_hechos').value || !document.getElementById('documento').value) {
                    event.preventDefault(); // Evitar el envío del formulario
                    errorMessage.style.display = 'block';
                    errorMessage.textContent = 'Por favor, complete todos los campos obligatorios.';
                }
            });
        </script>
    
</div>
