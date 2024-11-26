<div class="relative overflow-x-auto">
    <table class="table_id min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th scope="col" class="px-6 py-4">Canal</th>
                <th scope="col" class="px-6 py-4">Fecha de Recepción</th>
                <th scope="col" class="px-6 py-4">Entidad Sujeta a Control</th>
                <th scope="col" class="px-6 py-4">Estado</th>
            </tr>
        </thead>
        <tbody>
            @if($denuncias->count() > 0)
                @foreach ($denuncias as $denuncia)
                    <tr class="bg-white border-b text-center">
                        <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">{{ $denuncia->canal }}</td>
                        <td scope="row" class="px-6 py-4 whitespace-nowrap">{{ $denuncia->fecha_recepcion }}</td>
                        <td scope="row" class="px-6 py-4 whitespace-nowrap">{{ $denuncia->entidad_sujeta_control }}</td>
                        <td scope="row" class="px-6 py-4 whitespace-nowrap">{{ $denuncia->denun_estado }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="px-6 py-4 text-center" colspan="4">No se ha registrado ninguna denuncia</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
