<x-app-layout>
    <x-slot name="header">
        <h2 class="text-sm text-gray-800 leading-tight">
            <!-- <input type="search" name="keyword" id="keyword"> -->
            <label class="relative block">
              <span class="sr-only">Search</span>
              <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"><!-- ... --></svg>
              </span>
              <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for wines..." type="text" name="search"/>
            </label>
        </h2>
    </x-slot>

    <div class="bg-slate-500 h-[78.5vh] p-3 w-screen">
      <div class="flex flex-col flex-nowrap overflow-y-scroll h-full">
        @foreach($lists as $wine)
          @include('components.wine-banner', $wine)
        @endforeach
      </div>
    </div>
</x-app-layout>
