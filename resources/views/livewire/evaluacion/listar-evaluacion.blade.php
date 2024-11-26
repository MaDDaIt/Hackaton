<div>
    <h3 class="text-2xl font-semibold mb-4">Lista de Evaluaciones</h3>

    @if (session()->has('success'))
        <div class="mb-4 p-4 bg-green-500 text-white rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 text-left">ID</th>
                <th class="px-4 py-2 text-left">Auditor</th>
                <th class="px-4 py-2 text-left">Fecha de Culminación</th>
                <th class="px-4 py-2 text-left">Resultado</th>
                <th class="px-4 py-2 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evaluaciones as $evaluacion)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $evaluacion->id }}</td>
                    <td class="px-4 py-2">{{ $evaluacion->auditor_evaluacion }}</td>
                    <td class="px-4 py-2">{{ $evaluacion->fecha_culminacion_evaluacion }}</td>
                    <td class="px-4 py-2">{{ $evaluacion->resultado_evaluacion }}</td>
                    <td class="px-4 py-2 text-center">
                        <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600" wire:click="editar({{ $evaluacion->id }})">Editar</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" wire:click="eliminar({{ $evaluacion->id }})">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

