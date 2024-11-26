<div>
    <button class="bg-blue-500 text-white py-2 px-4 mb-4 rounded hover:bg-blue-700 focus:outline-none" wire:click="abrirModal">Nueva Evaluación</button>

    @if (session()->has('success'))
        <div class="mt-3 p-4 bg-green-500 text-white rounded">
            {{ session('success') }}
        </div>
    @endif

    @if ($showModal)
        <div class="fixed inset-0 flex justify-center items-center z-50 bg-gray-500 bg-opacity-50">
            <div class="bg-white rounded-lg shadow-lg w-1/3">
                <div class="p-4 border-b">
                    <h5 class="text-xl font-semibold">Crear Evaluación</h5>
                    <button type="button" class="text-gray-500 hover:text-gray-700" wire:click="cerrarModal">&times;</button>
                </div>
                <div class="p-6">
                    <form wire:submit.prevent="guardarEvaluacion">
                        <div class="mb-4">
                            <label for="denuncia_id" class="block text-sm font-medium text-gray-700">Denuncia</label>
                            <select wire:model="denuncia_id" id="denuncia_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="">Seleccione una denuncia</option>
                                @foreach ($denuncias as $denuncia)
                                    <option value="{{ $denuncia->id }}">{{ $denuncia->canal }}</option>
                                @endforeach
                            </select>
                            @error('denuncia_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="auditor_evaluacion" class="block text-sm font-medium text-gray-700">Auditor</label>
                            <input type="text" wire:model="auditor_evaluacion" id="auditor_evaluacion" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            @error('auditor_evaluacion') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="fecha_culminacion_evaluacion" class="block text-sm font-medium text-gray-700">Fecha de Culminación</label>
                            <input type="date" wire:model="fecha_culminacion_evaluacion" id="fecha_culminacion_evaluacion" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            @error('fecha_culminacion_evaluacion') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="resultado_evaluacion" class="block text-sm font-medium text-gray-700">Resultado</label>
                            <input type="text" wire:model="resultado_evaluacion" id="resultado_evaluacion" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            @error('resultado_evaluacion') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>
