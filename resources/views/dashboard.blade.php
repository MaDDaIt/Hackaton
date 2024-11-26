<x-app-layout>
    <div class="flex h-screen bg-gray-50">
        <!-- Sidebar -->
        

        <!-- Main Content -->
        <div class="flex flex-col flex-1">
          <!-- Header
          <header class="flex items-center justify-between p-6 bg-white shadow-md">
            <h2 class="text-xl font-bold text-gray-800">Panel de Gestión</h2>
            <div class="flex items-center space-x-4">
              <input
                type="text"
                placeholder="Buscar denuncias..."
                class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
              <div class="w-10 h-10 bg-gray-200 rounded-full"></div>
            </div>
          </header>-->

          <!-- Main Section -->
          <main class="flex-1 px-6 pt-6 space-y-6 overflow-x-auto">
            <!-- Cards -->
            <div class="grid grid-cols-3 gap-6">
              <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-bold text-gray-800">Denuncias Totales</h3>
                <p class="text-3xl font-semibold text-blue-600">1,458</p>
              </div>
              <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-bold text-gray-800">Procesadas</h3>
                <p class="text-3xl font-semibold text-green-600">850</p>
              </div>
              <div class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="text-lg font-bold text-gray-800">Desatendidas</h3>
                <p class="text-3xl font-semibold text-red-600">608</p>
              </div>
            </div>

            <!-- Tasks Section -->
            <div class="p-6 bg-white rounded-lg shadow-md">
              <h3 class="text-lg font-bold text-gray-800">Denuncias Recientes</h3>
              <ul class="divide-y divide-gray-200">
                <li class="flex items-center justify-between py-4">
                  <div>
                    <p class="font-medium text-gray-800">Denuncia #12345</p>
                    <p class="text-sm text-gray-500">Fecha: 19/11/2024</p>
                  </div>
                  <button class="px-4 py-2 text-sm font-medium text-blue-600 bg-blue-100 rounded hover:bg-blue-200">
                    Ver Detalles
                  </button>
                </li>
                <li class="flex items-center justify-between py-4">
                  <div>
                    <p class="font-medium text-gray-800">Denuncia #12346</p>
                    <p class="text-sm text-gray-500">Fecha: 20/11/2024</p>
                  </div>
                  <button class="px-4 py-2 text-sm font-medium text-blue-600 bg-blue-100 rounded hover:bg-blue-200">
                    Ver Detalles
                  </button>
                </li>
              </ul>
            </div>

            <!-- Chart Section -->
            <div class="p-6 bg-white rounded-lg shadow-md">
              <h3 class="text-lg font-bold text-gray-800">Denuncias Mensuales</h3>
              <canvas id="chartDenuncias" class="mt-4"></canvas>
            </div>
          </main>
        </div>
      </div>

      <!-- Chart.js Script -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const ctx = document.getElementById('chartDenuncias').getContext('2d');
        const chart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
              label: 'Denuncias por Mes',
              data: [120, 130, 150, 140, 180, 200, 210, 190, 220, 250, 230, 240],
              backgroundColor: 'rgba(54, 162, 235, 0.6)',
              borderColor: 'rgba(54, 162, 235, 1)',
              borderWidth: 1
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>

</x-app-layout>
