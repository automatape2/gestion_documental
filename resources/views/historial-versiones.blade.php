<x-layouts.app :title="__('Historial de Versiones')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        <!-- Encabezado -->
        <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100 mb-2">
                        {{ __('Historial de Versiones') }}
                    </h1>
                    <p class="text-zinc-600 dark:text-zinc-400">
                        {{ __('Seguimiento y control de versiones de documentos del sistema') }}
                    </p>
                </div>
                <div class="flex items-center gap-2">
                    <flux:button variant="outline" size="sm">
                        <flux:icon name="arrow-down-tray" class="w-4 h-4 mr-1" />
                        {{ __('Exportar Historial') }}
                    </flux:button>
                    <flux:button variant="primary" size="sm">
                        <flux:icon name="plus" class="w-4 h-4 mr-1" />
                        {{ __('Nueva Versión') }}
                    </flux:button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Panel de Filtros -->
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 sticky top-6">
                    <h2 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100 mb-4 flex items-center gap-2">
                        <flux:icon name="funnel" class="w-5 h-5" />
                        {{ __('Filtros') }}
                    </h2>

                    <div class="space-y-4">
                        <!-- Documento específico -->
                        <div>
                            <flux:input
                                label="{{ __('Buscar documento') }}"
                                placeholder="{{ __('Nombre del documento...') }}"
                                type="search"
                            />
                        </div>

                        <!-- Tipo de cambio -->
                        <div>
                            <flux:select label="{{ __('Tipo de Cambio') }}">
                                <option value="">{{ __('Todos los cambios') }}</option>
                                <option value="created">{{ __('Creación') }}</option>
                                <option value="updated">{{ __('Actualización') }}</option>
                                <option value="renamed">{{ __('Renombrado') }}</option>
                                <option value="moved">{{ __('Movido') }}</option>
                                <option value="deleted">{{ __('Eliminado') }}</option>
                                <option value="restored">{{ __('Restaurado') }}</option>
                            </flux:select>
                        </div>

                        <!-- Usuario -->
                        <div>
                            <flux:input
                                label="{{ __('Usuario') }}"
                                placeholder="{{ __('Nombre del usuario...') }}"
                            />
                        </div>

                        <!-- Rango de fechas -->
                        <div>
                            <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-2">
                                {{ __('Período') }}
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

                        <!-- Versión -->
                        <div>
                            <flux:select label="{{ __('Versión') }}">
                                <option value="">{{ __('Todas las versiones') }}</option>
                                <option value="major">{{ __('Versiones principales') }}</option>
                                <option value="minor">{{ __('Versiones menores') }}</option>
                                <option value="patch">{{ __('Parches') }}</option>
                            </flux:select>
                        </div>

                        <!-- Botones de acción -->
                        <div class="flex flex-col gap-2 pt-4 border-t border-zinc-200 dark:border-zinc-700">
                            <flux:button variant="primary" class="w-full">
                                <flux:icon name="magnifying-glass" class="w-4 h-4 mr-2" />
                                {{ __('Filtrar') }}
                            </flux:button>
                            <flux:button variant="ghost" class="w-full">
                                <flux:icon name="arrow-path" class="w-4 h-4 mr-2" />
                                {{ __('Limpiar') }}
                            </flux:button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Área principal -->
            <div class="lg:col-span-3">
                <!-- Estadísticas de versiones -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/20 rounded-lg flex items-center justify-center">
                                <flux:icon name="document-duplicate" class="w-5 h-5 text-blue-600 dark:text-blue-400" />
                            </div>
                            <div>
                                <p class="text-lg font-bold text-zinc-900 dark:text-zinc-100">1,847</p>
                                <p class="text-xs text-zinc-600 dark:text-zinc-400">{{ __('Versiones Totales') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 dark:bg-green-900/20 rounded-lg flex items-center justify-center">
                                <flux:icon name="clock" class="w-5 h-5 text-green-600 dark:text-green-400" />
                            </div>
                            <div>
                                <p class="text-lg font-bold text-zinc-900 dark:text-zinc-100">23</p>
                                <p class="text-xs text-zinc-600 dark:text-zinc-400">{{ __('Hoy') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900/20 rounded-lg flex items-center justify-center">
                                <flux:icon name="calendar-days" class="w-5 h-5 text-purple-600 dark:text-purple-400" />
                            </div>
                            <div>
                                <p class="text-lg font-bold text-zinc-900 dark:text-zinc-100">156</p>
                                <p class="text-xs text-zinc-600 dark:text-zinc-400">{{ __('Esta Semana') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-orange-100 dark:bg-orange-900/20 rounded-lg flex items-center justify-center">
                                <flux:icon name="chart-bar" class="w-5 h-5 text-orange-600 dark:text-orange-400" />
                            </div>
                            <div>
                                <p class="text-lg font-bold text-zinc-900 dark:text-zinc-100">689</p>
                                <p class="text-xs text-zinc-600 dark:text-zinc-400">{{ __('Este Mes') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Línea de tiempo de versiones -->
                <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700">
                    <div class="p-6 border-b border-zinc-200 dark:border-zinc-700">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                                {{ __('Línea de Tiempo de Versiones') }}
                            </h2>
                            <flux:select size="sm">
                                <option value="all">{{ __('Todos los documentos') }}</option>
                                <option value="contracts">{{ __('Contratos') }}</option>
                                <option value="reports">{{ __('Reportes') }}</option>
                                <option value="policies">{{ __('Políticas') }}</option>
                            </flux:select>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="space-y-6">
                            <!-- Entrada de versión 1 -->
                            <div class="relative">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/20 rounded-full flex items-center justify-center border-4 border-white dark:border-zinc-900">
                                            <flux:icon name="document-plus" class="w-4 h-4 text-blue-600 dark:text-blue-400" />
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start justify-between gap-4">
                                            <div class="flex-1">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <h3 class="text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                                                        Contrato de Servicios Profesionales 2024
                                                    </h3>
                                                    <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/20 text-blue-800 dark:text-blue-400 rounded-full text-xs font-medium">
                                                        v2.1
                                                    </span>
                                                </div>
                                                <p class="text-sm text-zinc-600 dark:text-zinc-400 mb-2">
                                                    Actualización de cláusulas de confidencialidad y términos de pago
                                                </p>
                                                <div class="flex items-center gap-4 text-xs text-zinc-500">
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="user" class="w-3 h-3" />
                                                        María García
                                                    </span>
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="clock" class="w-3 h-3" />
                                                        Hace 2 horas
                                                    </span>
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="pencil" class="w-3 h-3" />
                                                        Actualización
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
                                                    <flux:icon name="arrow-uturn-left" class="w-4 h-4" />
                                                </flux:button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute left-5 top-12 w-px h-6 bg-zinc-200 dark:bg-zinc-700"></div>
                            </div>

                            <!-- Entrada de versión 2 -->
                            <div class="relative">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-green-100 dark:bg-green-900/20 rounded-full flex items-center justify-center border-4 border-white dark:border-zinc-900">
                                            <flux:icon name="check" class="w-4 h-4 text-green-600 dark:text-green-400" />
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start justify-between gap-4">
                                            <div class="flex-1">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <h3 class="text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                                                        Reporte Financiero Q4 2023
                                                    </h3>
                                                    <span class="px-2 py-1 bg-green-100 dark:bg-green-900/20 text-green-800 dark:text-green-400 rounded-full text-xs font-medium">
                                                        v1.0
                                                    </span>
                                                </div>
                                                <p class="text-sm text-zinc-600 dark:text-zinc-400 mb-2">
                                                    Versión final aprobada del reporte financiero del cuarto trimestre
                                                </p>
                                                <div class="flex items-center gap-4 text-xs text-zinc-500">
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="user" class="w-3 h-3" />
                                                        Carlos López
                                                    </span>
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="clock" class="w-3 h-3" />
                                                        Hace 5 horas
                                                    </span>
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="check-circle" class="w-3 h-3" />
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
                                                    <flux:icon name="code-bracket" class="w-4 h-4" />
                                                </flux:button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute left-5 top-12 w-px h-6 bg-zinc-200 dark:bg-zinc-700"></div>
                            </div>

                            <!-- Entrada de versión 3 -->
                            <div class="relative">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-yellow-100 dark:bg-yellow-900/20 rounded-full flex items-center justify-center border-4 border-white dark:border-zinc-900">
                                            <flux:icon name="folder" class="w-4 h-4 text-yellow-600 dark:text-yellow-400" />
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start justify-between gap-4">
                                            <div class="flex-1">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <h3 class="text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                                                        Manual de Procedimientos HR
                                                    </h3>
                                                    <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/20 text-yellow-800 dark:text-yellow-400 rounded-full text-xs font-medium">
                                                        v0.9
                                                    </span>
                                                </div>
                                                <p class="text-sm text-zinc-600 dark:text-zinc-400 mb-2">
                                                    Documento movido a la carpeta "Recursos Humanos/Manuales"
                                                </p>
                                                <div class="flex items-center gap-4 text-xs text-zinc-500">
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="user" class="w-3 h-3" />
                                                        Ana Rodríguez
                                                    </span>
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="clock" class="w-3 h-3" />
                                                        Ayer
                                                    </span>
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="arrow-right" class="w-3 h-3" />
                                                        Movido
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
                                                    <flux:icon name="clock" class="w-4 h-4" />
                                                </flux:button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute left-5 top-12 w-px h-6 bg-zinc-200 dark:bg-zinc-700"></div>
                            </div>

                            <!-- Entrada de versión 4 -->
                            <div class="relative">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900/20 rounded-full flex items-center justify-center border-4 border-white dark:border-zinc-900">
                                            <flux:icon name="pencil-square" class="w-4 h-4 text-purple-600 dark:text-purple-400" />
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start justify-between gap-4">
                                            <div class="flex-1">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <h3 class="text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                                                        Política de Seguridad Informática
                                                    </h3>
                                                    <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/20 text-purple-800 dark:text-purple-400 rounded-full text-xs font-medium">
                                                        v3.2
                                                    </span>
                                                </div>
                                                <p class="text-sm text-zinc-600 dark:text-zinc-400 mb-2">
                                                    Actualización de protocolos de acceso remoto y autenticación multifactor
                                                </p>
                                                <div class="flex items-center gap-4 text-xs text-zinc-500">
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="user" class="w-3 h-3" />
                                                        Roberto Silva
                                                    </span>
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="clock" class="w-3 h-3" />
                                                        Hace 2 días
                                                    </span>
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="pencil" class="w-3 h-3" />
                                                        Actualización
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
                                                    <flux:icon name="document-duplicate" class="w-4 h-4" />
                                                </flux:button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute left-5 top-12 w-px h-6 bg-zinc-200 dark:bg-zinc-700"></div>
                            </div>

                            <!-- Entrada de versión 5 -->
                            <div class="relative">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-red-100 dark:bg-red-900/20 rounded-full flex items-center justify-center border-4 border-white dark:border-zinc-900">
                                            <flux:icon name="trash" class="w-4 h-4 text-red-600 dark:text-red-400" />
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start justify-between gap-4">
                                            <div class="flex-1">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <h3 class="text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                                                        Propuesta Comercial Cliente XYZ
                                                    </h3>
                                                    <span class="px-2 py-1 bg-red-100 dark:bg-red-900/20 text-red-800 dark:text-red-400 rounded-full text-xs font-medium">
                                                        v1.3
                                                    </span>
                                                </div>
                                                <p class="text-sm text-zinc-600 dark:text-zinc-400 mb-2">
                                                    Documento eliminado - propuesta rechazada por el cliente
                                                </p>
                                                <div class="flex items-center gap-4 text-xs text-zinc-500">
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="user" class="w-3 h-3" />
                                                        Laura Martínez
                                                    </span>
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="clock" class="w-3 h-3" />
                                                        Hace 3 días
                                                    </span>
                                                    <span class="flex items-center gap-1">
                                                        <flux:icon name="trash" class="w-3 h-3" />
                                                        Eliminado
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <flux:button variant="ghost" size="sm">
                                                    <flux:icon name="arrow-uturn-left" class="w-4 h-4" />
                                                </flux:button>
                                                <flux:button variant="ghost" size="sm">
                                                    <flux:icon name="clock" class="w-4 h-4" />
                                                </flux:button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cargar más -->
                        <div class="mt-8 text-center">
                            <flux:button variant="outline">
                                <flux:icon name="arrow-down" class="w-4 h-4 mr-2" />
                                {{ __('Cargar más versiones') }}
                            </flux:button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
