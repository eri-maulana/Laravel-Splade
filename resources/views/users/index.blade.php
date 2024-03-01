<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Users') }}
      </h2>
  </x-slot>

  <div class="py-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <Link href="{{ route('users.create') }}" class="p-3 bg-teal-500 hover:bg-teal-400 shadow-lg text-white rounded-md">Create User</Link>
      <x-splade-table :for="$users" pagination-scroll="preserve"/>
   </div>
  </div>
</x-app-layout>