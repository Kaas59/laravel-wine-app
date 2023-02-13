<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Home
        </h2>
    </x-slot>
    <div class="bg-slate-500 h-[78.5vh] py-2">
      <div class="flex flex-wrap align-items-center overflow-y-scroll w-full h-[77vh]">
        @foreach($categories as $category)
            @include('components.category', $category)
        @endforeach
      </div>
    </div>
</x-app-layout>
