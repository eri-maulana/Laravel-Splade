<x-app-layout >
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-splade-link href="{{ route('users.create') }}"
                class="p-3 bg-teal-500 hover:bg-teal-400 shadow-lg text-white rounded-md ">Create User</x-splade-link>

            <x-splade-table :for="$users" pagination-scroll="head" class="mt-5">
                <x-splade-cell actions as="$user" class="">
                    <a href="{{ route('users.edit', $user) }}"
                        class="p-2 bg-sky-400 hover:bg-sky-300 rounded-md text-xs text-white me-2">Edit</a>
                    <x-splade-form action="{{ route('users.destroy', $user) }}" method="delete" confirm="Delete User" confirm-text="Are you sure you want to delete this user?"
                        confirm-button="Yes, delete!" cancel-button="No, I want to stay!">
                        <x-splade-button class="p-2 bg-red-400 hover:bg-red-300 rounded-md text-xs text-white me-2   ">Delete</x-splade-button>
                    </x-splade-form>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>
</x-app-layout>
