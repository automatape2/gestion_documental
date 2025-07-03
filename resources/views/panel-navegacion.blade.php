<x-layouts.app :title="__('Panel de Navegación')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        <!-- Encabezado Principal -->
        <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100 mb-2">
                {{ __('Panel de Navegación Principal') }}
            </h1>
            <p class="text-zinc-600 dark:text-zinc-400">
                {{ __('Acceda a todas las funcionalidades del Sistema de Gestión Documental') }}
            </p>
        </div>

        <!-- Tarjetas de Navegación Principal -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Gestión de Documentos -->
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="document-text" class="w-8 h-8 text-blue-600 dark:text-blue-400" />
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                            {{ __('Gestión de Documentos') }}
                        </h3>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Crear, editar y organizar documentos') }}
                        </p>
                    </div>
                </div>
                <div class="space-y-2">
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="plus" class="w-4 h-4 mr-2" />
                        {{ __('Nuevo Documento') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="folder-open" class="w-4 h-4 mr-2" />
                        {{ __('Mis Documentos') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="archive-box" class="w-4 h-4 mr-2" />
                        {{ __('Documentos Archivados') }}
                    </flux:button>
                </div>
            </div>

            <!-- Búsqueda y Filtros -->
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="magnifying-glass" class="w-8 h-8 text-green-600 dark:text-green-400" />
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                            {{ __('Búsqueda Avanzada') }}
                        </h3>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Encontrar documentos rápidamente') }}
                        </p>
                    </div>
                </div>
                <div class="space-y-2">
                    <a href="{{ route('busqueda.avanzada') }}" wire:navigate>
                        <flux:button variant="ghost" class="w-full justify-start" size="sm">
                            <flux:icon name="magnifying-glass" class="w-4 h-4 mr-2" />
                            {{ __('Búsqueda Global') }}
                        </flux:button>
                    </a>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="funnel" class="w-4 h-4 mr-2" />
                        {{ __('Filtros Avanzados') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="clock" class="w-4 h-4 mr-2" />
                        {{ __('Búsquedas Recientes') }}
                    </flux:button>
                </div>
            </div>

            <!-- Reportes y Estadísticas -->
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="chart-bar" class="w-8 h-8 text-purple-600 dark:text-purple-400" />
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                            {{ __('Reportes y Estadísticas') }}
                        </h3>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Análisis y métricas del sistema') }}
                        </p>
                    </div>
                </div>
                <div class="space-y-2">
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="chart-pie" class="w-4 h-4 mr-2" />
                        {{ __('Dashboard Ejecutivo') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="document-chart-bar" class="w-4 h-4 mr-2" />
                        {{ __('Reportes Personalizados') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="arrow-trending-up" class="w-4 h-4 mr-2" />
                        {{ __('Métricas de Uso') }}
                    </flux:button>
                </div>
            </div>

            <!-- Configuración del Sistema -->
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="cog-6-tooth" class="w-8 h-8 text-orange-600 dark:text-orange-400" />
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                            {{ __('Configuración') }}
                        </h3>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Administrar el sistema y usuarios') }}
                        </p>
                    </div>
                </div>
                <div class="space-y-2">
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="users" class="w-4 h-4 mr-2" />
                        {{ __('Gestión de Usuarios') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="key" class="w-4 h-4 mr-2" />
                        {{ __('Permisos y Roles') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="server" class="w-4 h-4 mr-2" />
                        {{ __('Configuración del Sistema') }}
                    </flux:button>
                </div>
            </div>

            <!-- Ayuda y Soporte -->
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="question-mark-circle" class="w-8 h-8 text-indigo-600 dark:text-indigo-400" />
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                            {{ __('Ayuda y Soporte') }}
                        </h3>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Recursos de ayuda y documentación') }}
                        </p>
                    </div>
                </div>
                <div class="space-y-2">
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="book-open" class="w-4 h-4 mr-2" />
                        {{ __('Documentación') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="chat-bubble-left-right" class="w-4 h-4 mr-2" />
                        {{ __('Soporte Técnico') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="academic-cap" class="w-4 h-4 mr-2" />
                        {{ __('Tutoriales') }}
                    </flux:button>
                </div>
            </div>

            <!-- Notificaciones -->
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="bell" class="w-8 h-8 text-red-600 dark:text-red-400" />
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                            {{ __('Notificaciones') }}
                        </h3>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Alertas y avisos del sistema') }}
                        </p>
                    </div>
                </div>
                <div class="space-y-2">
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="bell-alert" class="w-4 h-4 mr-2" />
                        {{ __('Alertas Pendientes') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="envelope" class="w-4 h-4 mr-2" />
                        {{ __('Mensajes') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="cog" class="w-4 h-4 mr-2" />
                        {{ __('Configurar Notificaciones') }}
                    </flux:button>
                </div>
            </div>

            <!-- Control de Versiones -->
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="clock" class="w-8 h-8 text-teal-600 dark:text-teal-400" />
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                            {{ __('Control de Versiones') }}
                        </h3>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Seguimiento y gestión de versiones') }}
                        </p>
                    </div>
                </div>
                <div class="space-y-2">
                    <a href="{{ route('historial.versiones') }}" wire:navigate>
                        <flux:button variant="ghost" class="w-full justify-start" size="sm">
                            <flux:icon name="clock" class="w-4 h-4 mr-2" />
                            {{ __('Historial de Versiones') }}
                        </flux:button>
                    </a>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="document-duplicate" class="w-4 h-4 mr-2" />
                        {{ __('Comparar Versiones') }}
                    </flux:button>
                    <flux:button variant="ghost" class="w-full justify-start" size="sm">
                        <flux:icon name="arrow-uturn-left" class="w-4 h-4 mr-2" />
                        {{ __('Restaurar Versión') }}
                    </flux:button>
                </div>
            </div>
        </div>

        <!-- Sección de Acceso Rápido -->
        <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
            <h2 class="text-xl font-semibold text-zinc-900 dark:text-zinc-100 mb-4">
                {{ __('Acceso Rápido') }}
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <flux:button variant="outline" class="flex flex-col items-center gap-2 p-4 h-auto">
                    <flux:icon name="document-plus" class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                    <span class="text-sm">{{ __('Nuevo Doc') }}</span>
                </flux:button>
                <flux:button variant="outline" class="flex flex-col items-center gap-2 p-4 h-auto">
                    <flux:icon name="folder-plus" class="w-6 h-6 text-green-600 dark:text-green-400" />
                    <span class="text-sm">{{ __('Nueva Carpeta') }}</span>
                </flux:button>
                <flux:button variant="outline" class="flex flex-col items-center gap-2 p-4 h-auto">
                    <flux:icon name="cloud-arrow-up" class="w-6 h-6 text-purple-600 dark:text-purple-400" />
                    <span class="text-sm">{{ __('Subir Archivo') }}</span>
                </flux:button>
                <flux:button variant="outline" class="flex flex-col items-center gap-2 p-4 h-auto">
                    <flux:icon name="share" class="w-6 h-6 text-orange-600 dark:text-orange-400" />
                    <span class="text-sm">{{ __('Compartir') }}</span>
                </flux:button>
                <flux:button variant="outline" class="flex flex-col items-center gap-2 p-4 h-auto">
                    <flux:icon name="printer" class="w-6 h-6 text-indigo-600 dark:text-indigo-400" />
                    <span class="text-sm">{{ __('Imprimir') }}</span>
                </flux:button>
                <flux:button variant="outline" class="flex flex-col items-center gap-2 p-4 h-auto">
                    <flux:icon name="arrow-down-tray" class="w-6 h-6 text-red-600 dark:text-red-400" />
                    <span class="text-sm">{{ __('Descargar') }}</span>
                </flux:button>
            </div>
        </div>

        <!-- Estadísticas Rápidas -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="document-text" class="w-8 h-8 text-blue-600 dark:text-blue-400" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">1,234</p>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">{{ __('Documentos Totales') }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="users" class="w-8 h-8 text-green-600 dark:text-green-400" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">89</p>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">{{ __('Usuarios Activos') }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="folder" class="w-8 h-8 text-purple-600 dark:text-purple-400" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">456</p>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">{{ __('Carpetas') }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0">
                        <flux:icon name="server" class="w-8 h-8 text-orange-600 dark:text-orange-400" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">2.1 GB</p>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">{{ __('Espacio Utilizado') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
