<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-semibold text-gray-900">{{ __('Empresas') }}</h1>
    </x-slot>
    <div class="space-y-12">
        <div class="pb-12 border-b border-gray-900/10">
            <p class="mt-1 text-sm leading-6 text-gray-600">Ingrese la información requerida en el siguiente formulario
                para agregar una nueva empresa.</p>
        </div>
        <div class="p-4 bg-gray-200 rounded-lg shadow-md">
            <form>
                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="clave" class="block text-sm font-medium leading-6 text-gray-900">Clave:</label>
                        <div class="mt-2">
                            <input type="text" name="clave" id="clave"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre:</label>
                        <div class="mt-2">
                            <input type="text" name="nombre" id="nombre"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Razón
                            social:</label>
                        <div class="mt-2">
                            <input type="text" name="nombre" id="nombre"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="clave" class="block text-sm font-medium leading-6 text-gray-900">RFC:</label>
                        <div class="mt-2">
                            <input type="text" name="rfc" id="rfc"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Direccion fiscal:</label>
                        <div class="mt-2">
                            <input type="text" name="direccion_fiscal" id="direccion_fiscal"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Número exterior:</label>
                        <div class="mt-2">
                            <input type="text" name="num_exterior" id="num_exterior"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Número interior:</label>
                        <div class="mt-2">
                            <input type="text" name="num_interior" id="num_interior"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label class="text-sm font-medium leading-6 text-gray-900">Estado:</label>
                        <div class="mt-2">
                            <select name="estado" id="estado"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option selected>Elija una opción...</option>
                                <option value="">...</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="text-sm font-medium leading-6 text-gray-900">Municipio:</label>
                        <div class="mt-2">
                            <select name="municipio" id="municipio"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option selected>Elija una opción...</option>
                                <option value="">...</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="text-sm font-medium leading-6 text-gray-900">Localidad:</label>
                        <div class="mt-2">
                            <select name="localidad" id="localidad"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option selected>Elija una opción...</option>
                                <option value="">...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-1">
                        <label class="text-sm font-medium leading-6 text-gray-900">Colonia:</label>
                        <div class="mt-2">
                            <input type="text" name="num_interior" id="num_interior"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label class="text-sm font-medium leading-6 text-gray-900">Ciudad:</label>
                        <div class="mt-2">
                            <input type="text" name="ciudad" id="ciudad"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label class="text-sm font-medium leading-6 text-gray-900">Teléfono:</label>
                        <div class="mt-2">
                            <input type="text" name="telefono" id="telefono"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
					<div class="sm:col-span-3">
						<label class="block mb-2 text-sm font-bold text-gray-700" for="imagen">Logo:</label>
						<input
							class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
							id="logo"
							type="file"
							accept="image/*"
							/>
					</div>
                </div>
                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="" class="text-sm font-medium leading-6 text-gray-900">Regimen fiscal:</label>
                        <div class="mt-2">
                            <select name="regimen_fiscal" id="regimen_fiscal"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option selected>Elija una opción...</option>
                                <option value="">...</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label class="text-sm font-medium leading-6 text-gray-900">Uso de CFDI:</label>
                        <div class="mt-2">
							<select name="regimen_fiscal" id="regimen_fiscal" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
								<option selected>Elija una opción...</option>
								<option value="">...</option>
							</select>
						</div>
                    </div>
                </div>

                <div class="flex items-center justify-end mt-6 gap-x-6">
                    <a href="{{ route('empresas.index') }}" type="button"
                        class="px-3 py-2 text-sm font-semibold text-white bg-gray-700 rounded-md shadow-sm hover:bg-gray-500 focus-visible:outline focus:visible:outline-2-gray-700">Cancelar</a>
                    <button type="submit"
                        class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
                </div>
        </div>
        {{-- <div class="pb-12 border-b border-gray-900/10"> --}}
        {{--
		<div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
			<div class="sm:col-span-3">
				<label for="" class="text-sm font-medium leading-6 text-gray-900">Uso de CFDI:</label>
				<div class="mt-2">
					<select name="regimen_fiscal" id="regimen_fiscal" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						<option selected>Elija una opción...</option>
						<option value="">...</option>
					</select>
				</div>
			</div>
		</div> --}}


        </form>

</x-app-layout>
