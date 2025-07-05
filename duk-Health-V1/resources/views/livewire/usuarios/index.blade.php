<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;
use App\Models\User;

new class extends Component {
    public function render(): mixed
    {
        $users = User::paginate(10);

        return view('livewire.usuarios.index', compact('users'));
    }
}; ?>

<div class="w-full px-6">
    {{-- Titulo de pagina --}}
    <x-slot name=" title">
        {{ __('Duk Health - Usuarios') }}
    </x-slot>

    {{-- Contenido de la pagina --}}
    <x-slot name="header">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">
            {{ __('Lista de Usuarios Registrados.') }}
        </h1><br>

        <a href="{{ route('usuarios.create') }}"
            class="inline-block px-3 py-1.5 bg-green-900 text-white rounded-md hover:bg-green-600 transition">
            <i class="fas fa-plus"></i> {{ __('Nuevo Usuario') }}
        </a>
        {{-- separador --}}
        <hr class="my-4 border-gray-200 dark:border-zinc-700">

    </x-slot>

    <x-slot name="content">
        <x-table>
            <x-slot:thead>
                <tr>
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">Nombre</th>
                    <th class="px-6 py-3 text-left">Correo</th>
                    <th class="px-6 py-3 text-left">Contacto</th>
                    <th class="px-6 py-3 text-left">Cargo</th>
                    <th class="px-6 py-3 text-left">Rol</th>
                    <th class="px-6 py-3 text-left">Estado</th>
                    <th class="px-6 py-3 text-center" colspan="">Acciones</th>
                </tr>
            </x-slot:thead>

            @foreach ($users as $user)
                <tr class="hover:bg-zinc-100 dark:hover:bg-zinc-800 transition">
                    <td class="px-6 py-3">{{ $user->id }}</td>
                    <td class="px-6 py-3 font-medium">{{ $user->name }}</td>
                    <td class="px-6 py-3">{{ $user->email }}</td>
                    <td class="px-6 py-3">{{ $user->contacto }}</td>
                    <td class="px-6 py-3">{{ $user->cargo }}</td>
                    <td class="px-6 py-3">{{ $user->role }}</td>
                    <td class="px-6 py-3">
                        <span
                            class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold
                    {{ $user->estado ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200' }}">
                            {{ $user->estado ? 'Activo' : 'Inactivo' }}
                        </span>
                    </td>
                    <td class="px-6 py-3 text-center">
                        <a href="{{ route('dashboard', $user) }}"
                            class="inline-block px-3 py-1.5 bg-amber-600 text-white rounded-md hover:bg-amber-900 transition">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
        </x-table>
    </x-slot>




    <div class="mt-4">
        {{ $users->links() }}
    </div>

</div>
