<x-layouts.app :title="__('Búsqueda Avanzada')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        <!-- Encabezado -->
        <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100 mb-2">
                {{ __('Búsqueda Avanzada de Documentos') }}
            </h1>
            <p class="text-zinc-600 dark:text-zinc-400">
                {{ __('Utilice filtros avanzados para encontrar documentos específicos en el sistema') }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Panel de Filtros -->
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 sticky top-6">
                    <h2 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100 mb-4 flex items-center gap-2">
                        <flux:icon name="funnel" class="w-5 h-5" />
                        {{ __('Filtros de Búsqueda') }}
                    </h2>

                    <div class="space-y-6">
                        <!-- Búsqueda por texto -->
                        <div>
                            <flux:input
                                label="{{ __('Búsqueda por texto') }}"
                                placeholder="{{ __('Ingrese palabras clave...') }}"
                                type="search"
                            />
                        </div>

                        <!-- Tipo de documento -->
                        <div>
                            <flux:select label="{{ __('Tipo de Documento') }}">
                                <option value="">{{ __('Todos los tipos') }}</option>
                                <option value="pdf">{{ __('PDF') }}</option>
                                <option value="word">{{ __('Word') }}</option>
                                <option value="excel">{{ __('Excel') }}</option>
                                <option value="powerpoint">{{ __('PowerPoint') }}</option>
                                <option value="image">{{ __('Imagen') }}</option>
                                <option value="text">{{ __('Texto') }}</option>
                                <option value="other">{{ __('Otros') }}</option>
                            </flux:select>
                        </div>

                        <!-- Estado del documento -->
                        <div>
                            <flux:select label="{{ __('Estado') }}">
                                <option value="">{{ __('Todos los estados') }}</option>
                                <option value="draft">{{ __('Borrador') }}</option>
                                <option value="review">{{ __('En revisión') }}</option>
                                <option value="approved">{{ __('Aprobado') }}</option>
                                <option value="archived">{{ __('Archivado') }}</option>
                                <option value="deleted">{{ __('Eliminado') }}</option>
                            </flux:select>
                        </div>

                        <!-- Categoría -->
                        <div>
                            <flux:select label="{{ __('Categoría') }}">
                                <option value="">{{ __('Todas las categorías') }}</option>
                                <option value="contracts">{{ __('Contratos') }}</option>
                                <option value="invoices">{{ __('Facturas') }}</option>
                                <option value="reports">{{ __('Reportes') }}</option>
                                <option value="policies">{{ __('Políticas') }}</option>
                                <option value="procedures">{{ __('Procedimientos') }}</option>
                                <option value="legal">{{ __('Documentos Legales') }}</option>
                                <option value="hr">{{ __('Recursos Humanos') }}</option>
                                <option value="finance">{{ __('Finanzas') }}</option>
                            </flux:select>
                        </div>

                        <!-- Autor/Creador -->
                        <div>
                            <flux:input
                                label="{{ __('Autor/Creador') }}"
                                placeholder="{{ __('Nombre del autor...') }}"
                            />
                        </div>

                        <!-- Rango de fechas -->
                        <div>
                            <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-2">
                                {{ __('Fecha de Creación') }}
                            </label>
                            <div class="space-y-2">
                                <flux:input
                                    type="date"
                                    label="{{ __('Desde') }}"
                                    size="sm"
                                />
                                <flux:input
                                    type="date"
                                    label="{{ __('Hasta') }}"
                                    size="sm"
                                />
                            </div>
                        </div>

                        <!-- Tamaño del archivo -->
                        <div>
                            <flux:select label="{{ __('Tamaño del Archivo') }}">
                                <option value="">{{ __('Cualquier tamaño') }}</option>
                                <option value="small">{{ __('Pequeño (< 1MB)') }}</option>
                                <option value="medium">{{ __('Mediano (1-10MB)') }}</option>
                                <option value="large">{{ __('Grande (10-100MB)') }}</option>
                                <option value="xlarge">{{ __('Muy grande (> 100MB)') }}</option>
                            </flux:select>
                        </div>

                        <!-- Etiquetas -->
                        <div>
                            <flux:input
                                label="{{ __('Etiquetas') }}"
                                placeholder="{{ __('Separar con comas...') }}"
                            />
                        </div>

                        <!-- Botones de acción -->
                        <div class="flex flex-col gap-2 pt-4 border-t border-zinc-200 dark:border-zinc-700">
                            <flux:button variant="primary" class="w-full">
                                <flux:icon name="magnifying-glass" class="w-4 h-4 mr-2" />
                                {{ __('Buscar') }}
                            </flux:button>
                            <flux:button variant="ghost" class="w-full">
                                <flux:icon name="arrow-path" class="w-4 h-4 mr-2" />
                                {{ __('Limpiar Filtros') }}
                            </flux:button>
                        </div>

                        <!-- Búsquedas guardadas -->
                        <div class="pt-4 border-t border-zinc-200 dark:border-zinc-700">
                            <h3 class="text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-2">
                                {{ __('Búsquedas Guardadas') }}
                            </h3>
                            <div class="space-y-1">
                                <flux:button variant="ghost" size="sm" class="w-full justify-start text-xs">
                                    {{ __('Contratos 2024') }}
                                </flux:button>
                                <flux:button variant="ghost" size="sm" class="w-full justify-start text-xs">
                                    {{ __('Facturas pendientes') }}
                                </flux:button>
                                <flux:button variant="ghost" size="sm" class="w-full justify-start text-xs">
                                    {{ __('Documentos RH') }}
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Área de resultados -->
            <div class="lg:col-span-3">
                <!-- Barra de herramientas de resultados -->
                <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-4 mb-6">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <span class="text-sm text-zinc-600 dark:text-zinc-400">
                                {{ __('1,234 documentos encontrados') }}
                            </span>
                            <flux:select size="sm">
                                <option value="relevance">{{ __('Relevancia') }}</option>
                                <option value="date_desc">{{ __('Fecha (más reciente)') }}</option>
                                <option value="date_asc">{{ __('Fecha (más antiguo)') }}</option>
                                <option value="name_asc">{{ __('Nombre (A-Z)') }}</option>
                                <option value="name_desc">{{ __('Nombre (Z-A)') }}</option>
                                <option value="size_desc">{{ __('Tamaño (mayor)') }}</option>
                                <option value="size_asc">{{ __('Tamaño (menor)') }}</option>
                            </flux:select>
                        </div>
                        <div class="flex items-center gap-2">
                            <flux:button variant="ghost" size="sm">
                                <flux:icon name="bookmark" class="w-4 h-4 mr-1" />
                                {{ __('Guardar búsqueda') }}
                            </flux:button>
                            <flux:button variant="ghost" size="sm">
                                <flux:icon name="arrow-down-tray" class="w-4 h-4 mr-1" />
                                {{ __('Exportar') }}
                            </flux:button>
                            <div class="flex border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                <flux:button variant="ghost" size="sm" class="rounded-r-none">
                                    <flux:icon name="list-bullet" class="w-4 h-4" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm" class="rounded-l-none border-l border-zinc-200 dark:border-zinc-700">
                                    <flux:icon name="squares-2x2" class="w-4 h-4" />
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lista de resultados -->
                <div class="space-y-4">
                    <!-- Resultado 1 -->
                    <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-red-100 dark:bg-red-900/20 rounded-lg flex items-center justify-center">
                                    <flux:icon name="document-text" class="w-6 h-6 text-red-600 dark:text-red-400" />
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-start justify-between gap-4">
                                    <div class="flex-1">
                                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100 mb-1">
                                            Contrato de Servicios Profesionales 2024
                                        </h3>
                                        <p class="text-sm text-zinc-600 dark:text-zinc-400 mb-2">
                                            Documento que establece los términos y condiciones para la prestación de servicios profesionales...
                                        </p>
                                        <div class="flex items-center gap-4 text-xs text-zinc-500 dark:text-zinc-500">
                                            <span class="flex items-center gap-1">
                                                <flux:icon name="calendar" class="w-3 h-3" />
                                                15 Enero 2024
                                            </span>
                                            <span class="flex items-center gap-1">
                                                <flux:icon name="user" class="w-3 h-3" />
                                                María García
                                            </span>
                                            <span class="flex items-center gap-1">
                                                <flux:icon name="document" class="w-3 h-3" />
                                                2.1 MB
                                            </span>
                                            <span class="px-2 py-1 bg-green-100 dark:bg-green-900/20 text-green-800 dark:text-green-400 rounded-full">
                                                Aprobado
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <flux:button variant="ghost" size="sm">
                                            <flux:icon name="eye" class="w-4 h-4" />
                                        </flux:button>
                                        <flux:button variant="ghost" size="sm">
                                            <flux:icon name="arrow-down-tray" class="w-4 h-4" />
                                        </flux:button>
                                        <flux:button variant="ghost" size="sm">
                                            <flux:icon name="share" class="w-4 h-4" />
                                        </flux:button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Resultado 2 -->
                    <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/20 rounded-lg flex items-center justify-center">
                                    <flux:icon name="chart-bar" class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-start justify-between gap-4">
                                    <div class="flex-1">
                                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100 mb-1">
                                            Reporte Financiero Q4 2023
                                        </h3>
                                        <p class="text-sm text-zinc-600 dark:text-zinc-400 mb-2">
                                            Análisis detallado de los resultados financieros del cuarto trimestre del año 2023...
                                        </p>
                                        <div class="flex items-center gap-4 text-xs text-zinc-500 dark:text-zinc-500">
                                            <span class="flex items-center gap-1">
                                                <flux:icon name="calendar" class="w-3 h-3" />
                                                28 Diciembre 2023
                                            </span>
                                            <span class="flex items-center gap-1">
                                                <flux:icon name="user" class="w-3 h-3" />
                                                Carlos López
                                            </span>
                                            <span class="flex items-center gap-1">
                                                <flux:icon name="document" class="w-3 h-3" />
                                                5.7 MB
                                            </span>
                                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/20 text-blue-800 dark:text-blue-400 rounded-full">
                                                En revisión
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <flux:button variant="ghost" size="sm">
                                            <flux:icon name="eye" class="w-4 h-4" />
                                        </flux:button>
                                        <flux:button variant="ghost" size="sm">
                                            <flux:icon name="arrow-down-tray" class="w-4 h-4" />
                                        </flux:button>
                                        <flux:button variant="ghost" size="sm">
                                            <flux:icon name="share" class="w-4 h-4" />
                                        </flux:button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Resultado 3 -->
                    <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/20 rounded-lg flex items-center justify-center">
                                    <flux:icon name="clipboard-document-list" class="w-6 h-6 text-purple-600 dark:text-purple-400" />
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-start justify-between gap-4">
                                    <div class="flex-1">
                                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100 mb-1">
                                            Manual de Procedimientos HR
                                        </h3>
                                        <p class="text-sm text-zinc-600 dark:text-zinc-400 mb-2">
                                            Guía completa de procedimientos del departamento de Recursos Humanos actualizada...
                                        </p>
                                        <div class="flex items-center gap-4 text-xs text-zinc-500 dark:text-zinc-500">
                                            <span class="flex items-center gap-1">
                                                <flux:icon name="calendar" class="w-3 h-3" />
                                                10 Febrero 2024
                                            </span>
                                            <span class="flex items-center gap-1">
                                                <flux:icon name="user" class="w-3 h-3" />
                                                Ana Rodríguez
                                            </span>
                                            <span class="flex items-center gap-1">
                                                <flux:icon name="document" class="w-3 h-3" />
                                                1.2 MB
                                            </span>
                                            <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/20 text-yellow-800 dark:text-yellow-400 rounded-full">
                                                Borrador
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <flux:button variant="ghost" size="sm">
                                            <flux:icon name="eye" class="w-4 h-4" />
                                        </flux:button>
                                        <flux:button variant="ghost" size="sm">
                                            <flux:icon name="arrow-down-tray" class="w-4 h-4" />
                                        </flux:button>
                                        <flux:button variant="ghost" size="sm">
                                            <flux:icon name="share" class="w-4 h-4" />
                                        </flux:button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paginación -->
                <div class="mt-8 flex items-center justify-between">
                    <p class="text-sm text-zinc-600 dark:text-zinc-400">
                        {{ __('Mostrando 1-10 de 1,234 resultados') }}
                    </p>
                    <div class="flex items-center gap-2">
                        <flux:button variant="ghost" size="sm" disabled>
                            <flux:icon name="chevron-left" class="w-4 h-4" />
                            {{ __('Anterior') }}
                        </flux:button>
                        <div class="flex items-center gap-1">
                            <flux:button variant="primary" size="sm">1</flux:button>
                            <flux:button variant="ghost" size="sm">2</flux:button>
                            <flux:button variant="ghost" size="sm">3</flux:button>
                            <span class="px-2 text-zinc-400">...</span>
                            <flux:button variant="ghost" size="sm">124</flux:button>
                        </div>
                        <flux:button variant="ghost" size="sm">
                            {{ __('Siguiente') }}
                            <flux:icon name="chevron-right" class="w-4 h-4" />
                        </flux:button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
