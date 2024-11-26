<div>
    <div class="flex justify-center">
        <x-button class="px-3 py-3 uppercase" wire:click="abrirModal" wire:loading.attr="disabled">
            Agregar Denuncia
        </x-button>
    </div>
    <x-dialog-modal wire:model="showModal">
        <x-slot name="title">
            Agregar Denuncia
        </x-slot>

        <x-slot name="content">
            <section>
                <form wire:submit.prevent="guardarDenuncia">
                    <div class="mt-4">
                        <x-label for="canal" value="Canal" />
                        <x-input id="canal" wire:model="canal" type="text" class="mt-1 block w-full" />
                        <x-input-error for="canal" class="mt-2" />
                    </div>

                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center mt-4">
                        <div class="sm:w-1/2">
                            <x-label for="fecha_recepcion" value="Fecha de Recepción" />
                            <x-input id="fecha_recepcion" wire:model="fecha_recepcion" type="date" class="block mt-1 w-full" />
                            <x-input-error for="fecha_recepcion" class="mt-2" />
                        </div>

                        <div class="sm:w-1/2">
                            <x-label for="anio_ingreso" value="Año de Ingreso" />
                            <x-input id="anio_ingreso" wire:model="anio_ingreso" type="number" class="block mt-1 w-full" />
                            <x-input-error for="anio_ingreso" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-label for="entidad_sujeta_control" value="Entidad Sujeta a Control" />
                        <x-input id="entidad_sujeta_control" wire:model="entidad_sujeta_control" type="text" class="mt-1 block w-full" />
                        <x-input-error for="entidad_sujeta_control" class="mt-2" />
                    </div>

                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center mt-4">
                        <div class="sm:w-1/2">
                            <x-label for="ambito_geografico" value="Ámbito Geográfico" />
                            <x-input id="ambito_geografico" wire:model="ambito_geografico" type="text" class="block mt-1 w-full" />
                            <x-input-error for="ambito_geografico" class="mt-2" />
                        </div>

                        <div class="sm:w-1/2">
                            <x-label for="provincia" value="Provincia" />
                            <x-input id="provincia" wire:model="provincia" type="text" class="block mt-1 w-full" />
                            <x-input-error for="provincia" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-label for="distrito" value="Distrito" />
                        <x-input id="distrito" wire:model="distrito" type="text" class="mt-1 block w-full" />
                        <x-input-error for="distrito" class="mt-2" />
                    </div>

                </form>
            </section>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="cerrarModal">
                Cancelar
            </x-secondary-button>
            <x-button class="ml-2" wire:click="guardarDenuncia" wire:loading.attr="disabled">
                Guardar
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
