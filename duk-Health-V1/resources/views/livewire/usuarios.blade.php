<?php

use Livewire\Volt\Component;
use \Livewire\WithPagination;
use App\Models\User;

new class extends Component {
    

    public function render(): mixed
    {
        $users = User::paginate(5);

        return view('livewire.usuarios', compact('users'));
    }

}; ?>

<div>
    <x-slot name="title">
        {{ __('Duk Health - Usuarios') }}
    </x-slot>

    <x-slot name="header">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">
            {{ __('Lista de Usuarios Registrados') }}
        </h1><br><br>
    </x-slot>
    <x-table>
        <x-slot:thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Correo</th>
                <th class="px-4 py-2">Contacto</th>
                <th class="px-4 py-2">Cargo</th>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Estado</th>
                <th class="px-4 py-2" colspan="2">Acciones</th>

            </tr>
        </x-slot:thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="hover:bg-zinc-800 transition-colors duration-200">
                <td class="px-4 py-2">{{ $user->id }}</td>
                <td class="px-4 py-2">{{ $user->name }}</td>
                <td class="px-4 py-2">{{ $user->email }}</td>
                <td class="px-4 py-2">{{ $user->contacto }}</td>
                <td class="px-4 py-2">{{ $user->cargo }}</td>
                <td class="px-4 py-2">{{ $user->role }}</td>
                <td class="px-4 py-2">
                    {{ $user->estado ? 'Activo' : 'Inactivo' }}
                </td>
                <td class="px-4 py-2">
                    <a href="{{ route('dashboard', $user) }}" class="text-blue-600 hover:underline">Editar</a>
                </td>
                <td class="px-4 py-2">
                    <form action="{{ route('dashboard', $user) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </x-table>

    <div class="mt-4">
        {{ $users->links() }}
    </div>

</div>