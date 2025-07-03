<x-layouts.app :title="__('Gestión de Permisos')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        <!-- Encabezado -->
        <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-zinc-900 dark:text-zinc-100 mb-2">
                        {{ __('Gestión de Permisos y Roles') }}
                    </h1>
                    <p class="text-zinc-600 dark:text-zinc-400">
                        {{ __('Administre roles de usuario, permisos y control de acceso al sistema') }}
                    </p>
                </div>
                <div class="flex items-center gap-2">
                    <flux:button variant="outline" size="sm">
                        <flux:icon name="arrow-down-tray" class="w-4 h-4 mr-1" />
                        {{ __('Exportar Configuración') }}
                    </flux:button>
                    <flux:button variant="primary" size="sm">
                        <flux:icon name="plus" class="w-4 h-4 mr-1" />
                        {{ __('Nuevo Rol') }}
                    </flux:button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Panel de Roles -->
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                            {{ __('Roles del Sistema') }}
                        </h2>
                        <flux:button variant="ghost" size="sm">
                            <flux:icon name="plus" class="w-4 h-4" />
                        </flux:button>
                    </div>

                    <div class="space-y-3">
                        <!-- Rol Administrador -->
                        <div class="p-4 border border-zinc-200 dark:border-zinc-700 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-800 cursor-pointer transition-colors">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-red-100 dark:bg-red-900/20 rounded-lg flex items-center justify-center">
                                        <flux:icon name="shield-exclamation" class="w-4 h-4 text-red-600 dark:text-red-400" />
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-zinc-900 dark:text-zinc-100">Administrador</h3>
                                        <p class="text-xs text-zinc-600 dark:text-zinc-400">Acceso completo</p>
                                    </div>
                                </div>
                                <span class="px-2 py-1 bg-red-100 dark:bg-red-900/20 text-red-800 dark:text-red-400 rounded-full text-xs">
                                    3 usuarios
                                </span>
                            </div>
                            <div class="flex items-center gap-2">
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="pencil" class="w-3 h-3" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="users" class="w-3 h-3" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="trash" class="w-3 h-3" />
                                </flux:button>
                            </div>
                        </div>

                        <!-- Rol Editor -->
                        <div class="p-4 border border-zinc-200 dark:border-zinc-700 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-800 cursor-pointer transition-colors">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900/20 rounded-lg flex items-center justify-center">
                                        <flux:icon name="pencil-square" class="w-4 h-4 text-blue-600 dark:text-blue-400" />
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-zinc-900 dark:text-zinc-100">Editor</h3>
                                        <p class="text-xs text-zinc-600 dark:text-zinc-400">Crear y editar</p>
                                    </div>
                                </div>
                                <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/20 text-blue-800 dark:text-blue-400 rounded-full text-xs">
                                    12 usuarios
                                </span>
                            </div>
                            <div class="flex items-center gap-2">
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="pencil" class="w-3 h-3" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="users" class="w-3 h-3" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="trash" class="w-3 h-3" />
                                </flux:button>
                            </div>
                        </div>

                        <!-- Rol Revisor -->
                        <div class="p-4 border border-zinc-200 dark:border-zinc-700 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-800 cursor-pointer transition-colors">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-green-100 dark:bg-green-900/20 rounded-lg flex items-center justify-center">
                                        <flux:icon name="check-circle" class="w-4 h-4 text-green-600 dark:text-green-400" />
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-zinc-900 dark:text-zinc-100">Revisor</h3>
                                        <p class="text-xs text-zinc-600 dark:text-zinc-400">Aprobar y revisar</p>
                                    </div>
                                </div>
                                <span class="px-2 py-1 bg-green-100 dark:bg-green-900/20 text-green-800 dark:text-green-400 rounded-full text-xs">
                                    8 usuarios
                                </span>
                            </div>
                            <div class="flex items-center gap-2">
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="pencil" class="w-3 h-3" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="users" class="w-3 h-3" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="trash" class="w-3 h-3" />
                                </flux:button>
                            </div>
                        </div>

                        <!-- Rol Colaborador -->
                        <div class="p-4 border border-zinc-200 dark:border-zinc-700 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-800 cursor-pointer transition-colors">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-purple-100 dark:bg-purple-900/20 rounded-lg flex items-center justify-center">
                                        <flux:icon name="user-group" class="w-4 h-4 text-purple-600 dark:text-purple-400" />
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-zinc-900 dark:text-zinc-100">Colaborador</h3>
                                        <p class="text-xs text-zinc-600 dark:text-zinc-400">Colaborar y comentar</p>
                                    </div>
                                </div>
                                <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/20 text-purple-800 dark:text-purple-400 rounded-full text-xs">
                                    25 usuarios
                                </span>
                            </div>
                            <div class="flex items-center gap-2">
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="pencil" class="w-3 h-3" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="users" class="w-3 h-3" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="trash" class="w-3 h-3" />
                                </flux:button>
                            </div>
                        </div>

                        <!-- Rol Invitado -->
                        <div class="p-4 border border-zinc-200 dark:border-zinc-700 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-800 cursor-pointer transition-colors">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-gray-100 dark:bg-gray-900/20 rounded-lg flex items-center justify-center">
                                        <flux:icon name="eye" class="w-4 h-4 text-gray-600 dark:text-gray-400" />
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-zinc-900 dark:text-zinc-100">Invitado</h3>
                                        <p class="text-xs text-zinc-600 dark:text-zinc-400">Solo lectura</p>
                                    </div>
                                </div>
                                <span class="px-2 py-1 bg-gray-100 dark:bg-gray-900/20 text-gray-800 dark:text-gray-400 rounded-full text-xs">
                                    41 usuarios
                                </span>
                            </div>
                            <div class="flex items-center gap-2">
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="pencil" class="w-3 h-3" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="users" class="w-3 h-3" />
                                </flux:button>
                                <flux:button variant="ghost" size="sm">
                                    <flux:icon name="trash" class="w-3 h-3" />
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Panel de Permisos -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700">
                    <div class="p-6 border-b border-zinc-200 dark:border-zinc-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                                    {{ __('Matriz de Permisos - Rol: Editor') }}
                                </h2>
                                <p class="text-sm text-zinc-600 dark:text-zinc-400">
                                    {{ __('Configure los permisos específicos para este rol') }}
                                </p>
                            </div>
                            <flux:button variant="primary" size="sm">
                                <flux:icon name="check" class="w-4 h-4 mr-1" />
                                {{ __('Guardar Cambios') }}
                            </flux:button>
                        </div>
                    </div>

                    <div class="p-6">
                        <!-- Gestión de Documentos -->
                        <div class="mb-8">
                            <h3 class="text-base font-semibold text-zinc-900 dark:text-zinc-100 mb-4 flex items-center gap-2">
                                <flux:icon name="document-text" class="w-5 h-5 text-blue-600 dark:text-blue-400" />
                                {{ __('Gestión de Documentos') }}
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Crear documentos') }}</span>
                                    <flux:switch checked />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Editar documentos') }}</span>
                                    <flux:switch checked />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Eliminar documentos') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Ver documentos') }}</span>
                                    <flux:switch checked />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Descargar documentos') }}</span>
                                    <flux:switch checked />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Compartir documentos') }}</span>
                                    <flux:switch />
                                </div>
                            </div>
                        </div>

                        <!-- Gestión de Carpetas -->
                        <div class="mb-8">
                            <h3 class="text-base font-semibold text-zinc-900 dark:text-zinc-100 mb-4 flex items-center gap-2">
                                <flux:icon name="folder" class="w-5 h-5 text-green-600 dark:text-green-400" />
                                {{ __('Gestión de Carpetas') }}
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Crear carpetas') }}</span>
                                    <flux:switch checked />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Mover carpetas') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Eliminar carpetas') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Renombrar carpetas') }}</span>
                                    <flux:switch checked />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Ver contenido') }}</span>
                                    <flux:switch checked />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Configurar permisos') }}</span>
                                    <flux:switch />
                                </div>
                            </div>
                        </div>

                        <!-- Administración del Sistema -->
                        <div class="mb-8">
                            <h3 class="text-base font-semibold text-zinc-900 dark:text-zinc-100 mb-4 flex items-center gap-2">
                                <flux:icon name="cog-6-tooth" class="w-5 h-5 text-orange-600 dark:text-orange-400" />
                                {{ __('Administración del Sistema') }}
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Gestionar usuarios') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Configurar sistema') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Ver logs del sistema') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Hacer respaldos') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Restaurar sistema') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Actualizar sistema') }}</span>
                                    <flux:switch />
                                </div>
                            </div>
                        </div>

                        <!-- Reportes y Estadísticas -->
                        <div class="mb-8">
                            <h3 class="text-base font-semibold text-zinc-900 dark:text-zinc-100 mb-4 flex items-center gap-2">
                                <flux:icon name="chart-bar" class="w-5 h-5 text-purple-600 dark:text-purple-400" />
                                {{ __('Reportes y Estadísticas') }}
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Ver reportes básicos') }}</span>
                                    <flux:switch checked />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Crear reportes') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Exportar reportes') }}</span>
                                    <flux:switch checked />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Ver estadísticas') }}</span>
                                    <flux:switch checked />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Dashboard ejecutivo') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Métricas avanzadas') }}</span>
                                    <flux:switch />
                                </div>
                            </div>
                        </div>

                        <!-- Auditoría y Seguridad -->
                        <div class="mb-6">
                            <h3 class="text-base font-semibold text-zinc-900 dark:text-zinc-100 mb-4 flex items-center gap-2">
                                <flux:icon name="shield-check" class="w-5 h-5 text-red-600 dark:text-red-400" />
                                {{ __('Auditoría y Seguridad') }}
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Ver historial de acceso') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Ver logs de auditoría') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Configurar alertas') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Gestionar sesiones') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Bloquear usuarios') }}</span>
                                    <flux:switch />
                                </div>
                                <div class="flex items-center justify-between p-3 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                                    <span class="text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Configurar políticas') }}</span>
                                    <flux:switch />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Estadísticas de permisos -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/20 rounded-lg flex items-center justify-center">
                        <flux:icon name="users" class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">89</p>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">{{ __('Usuarios Totales') }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900/20 rounded-lg flex items-center justify-center">
                        <flux:icon name="shield-check" class="w-6 h-6 text-green-600 dark:text-green-400" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">5</p>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">{{ __('Roles Activos') }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/20 rounded-lg flex items-center justify-center">
                        <flux:icon name="key" class="w-6 h-6 text-purple-600 dark:text-purple-400" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">24</p>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">{{ __('Permisos Únicos') }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-zinc-900 rounded-xl border border-zinc-200 dark:border-zinc-700 p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/20 rounded-lg flex items-center justify-center">
                        <flux:icon name="clock" class="w-6 h-6 text-orange-600 dark:text-orange-400" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-zinc-900 dark:text-zinc-100">67</p>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400">{{ __('Usuarios Activos') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
