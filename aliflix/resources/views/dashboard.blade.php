<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    {{-- tailwind search --}}
       <form action="movies" Method="post">
       @csrf
        <input type="text" name = "search">
        <button type="submit" name = "submit">zoek </button>
       </form>  
</x-app-layout>
