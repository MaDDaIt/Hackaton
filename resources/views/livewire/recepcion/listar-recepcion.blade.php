<div class="relative overflow-x-auto">
    <table class="table_id min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th scope="col" class="px-6 py-4">Canal</th>
                <th scope="col" class="px-6 py-4">Fecha de Recepción</th>
                <th scope="col" class="px-6 py-4">Auditor de Recepción</th>
                <th scope="col" class="px-6 py-4">Fecha de Evaluación de Admisión</th>
                <th scope="col" class="px-6 py-4">Resultado</th>
                <th scope="col" class="px-6 py-4">Estado de la Denuncia</th>
                <th scope="col" class="px-6 py-4">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if($recepciones->count() > 0)
                @foreach ($recepciones as $recepcion)
                    @foreach ($recepcion->denuncias as $denuncia) <!-- Recorriendo todas las denuncias -->
                        <tr class="bg-white border-b text-center">
                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">{{ $denuncia->canal }}</td>
                            <td scope="row" class="px-6 py-4 whitespace-nowrap">{{ $recepcion->fecha_registro_recepcion }}</td>
                            <td scope="row" class="px-6 py-4 whitespace-nowrap">{{ $recepcion->auditor_recepcion }}</td>
                            <td scope="row" class="px-6 py-4 whitespace-nowrap">{{ $recepcion->fecha_evaluacion_admision }}</td>
                            <td scope="row" class="px-6 py-4 whitespace-nowrap">{{ $recepcion->resultado_recepcion }}</td>
                            <td scope="row" class="px-6 py-4 whitespace-nowrap">{{ $denuncia->denun_estado }}</td>
                            <td class="px-6 py-4 text-center">
                                <x-button wire:click="editar({{ $recepcion->id }})">Editar</x-button>
                                <x-button wire:click="eliminar({{ $recepcion->id }})" class="ml-2">Eliminar</x-button>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            @else
                <tr>
                    <td class="px-6 py-4 text-center" colspan="7">No se ha registrado ninguna recepción</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
