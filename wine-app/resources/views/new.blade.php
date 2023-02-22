<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            New
        </h2>
    </x-slot>

    <div class="bg-slate-500 h-[78.5vh] w-screen">
      <div class="flex flex-col flex-nowrap overflow-y-scroll h-full p-3">
        @foreach($lists as $wine)
          @include('components.wine-banner', $wine)
        @endforeach
      </div>
    </div>
</x-app-layout>
