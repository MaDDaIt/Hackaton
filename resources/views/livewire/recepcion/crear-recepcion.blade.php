<div>
    <div class="flex justify-center">
        <x-button class="px-3 py-3 uppercase" wire:click="abrirModal" wire:loading.attr="disabled">
            Agregar Recepción
        </x-button>
    </div>

    <!-- Modal para crear una nueva recepción -->
    <x-dialog-modal wire:model="showModal">
        <x-slot name="title">
            Agregar Recepción
        </x-slot>

        <x-slot name="content">
            <section>
                <form wire:submit.prevent="guardarRecepcion">
                    
                    <div class="mb-4">
                        <label for="denuncia_id" class="block text-sm font-medium text-gray-700">Denuncia</label>
                        <select wire:model="denuncia_id" id="denuncia_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="">Seleccione una denuncia</option>
                            @forelse ($denuncias as $denuncia)
                                <option value="{{ $denuncia->id }}">{{ $denuncia->canal }}</option>
                            @empty
                                <option disabled>No hay denuncias disponibles</option>
                            @endforelse
                        </select>
                        @error('denuncia_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mt-4">
                        <x-label for="fecha_registro_recepcion" value="Fecha de Recepción" />
                        <x-input id="fecha_registro_recepcion" wire:model="fecha_registro_recepcion" type="date" class="mt-1 block w-full" />
                        <x-input-error for="fecha_registro_recepcion" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-label for="auditor_recepcion" value="Auditor de Recepción" />
                        <x-input id="auditor_recepcion" wire:model="auditor_recepcion" type="text" class="mt-1 block w-full" />
                        <x-input-error for="auditor_recepcion" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-label for="fecha_evaluacion_admision" value="Fecha de Evaluación de Admisión" />
                        <x-input id="fecha_evaluacion_admision" wire:model="fecha_evaluacion_admision" type="date" class="mt-1 block w-full" />
                        <x-input-error for="fecha_evaluacion_admision" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-label for="resultado_recepcion" value="Resultado de Recepción" />
                        <x-input id="resultado_recepcion" wire:model="resultado_recepcion" type="text" class="mt-1 block w-full" />
                        <x-input-error for="resultado_recepcion" class="mt-2" />
                    </div>

                </form>
            </section>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="cerrarModal">
                Cancelar
            </x-secondary-button>
            <x-button class="ml-2" wire:click="guardarRecepcion" wire:loading.attr="disabled">
                Guardar
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>