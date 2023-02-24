<x-app-layout>
    <x-slot name="header">
        <h2 class="text-sm text-gray-800 leading-tight">
            「{{ $category['name'] }}」な時におすすめ
        </h2>
    </x-slot>
    <div class="h-[79.5vh] py-3 w-screen text-gray-800">
      <div class="flex px-3">
        <img src="/wine/00001.png" alt="" class="w-[40vw] mx-auto rounded-lg shadow-sm">
        <div class="my-3 flex flex-col justify-around px-3">
          <div>{{ $wine['color'] }} / {{ $wine['type'] }}</div>
          <div>{{ $wine['name'] }}</div>
          @php
            $sp = round($wine['sommelier_point'] * 2, 0)/ 2.0
          @endphp
          <div><span class="star10_rating" data-rate="{{ $sp }}"></span></div>
          <div>{{ $wine['country'] }}産</div>
        </div>
      </div>
      <div class="w-full my-1">
        <div class="flex flex-row-reverse px-3">
          <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" class="inline-flex items-center bg-sky-600 hover:bg-sky-500 text-white rounded px-2 py-1 mx-1 shadow-sm" type="button">
            <p>Add List</p>
            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
        </div>
      </div>
      <div class="mb-3 mx-3 px-3 flex flex-col justify-around h-[15vh]">
        <div class="flex">
          <div class="w-[30%] text-center">品種</div>
          <div class="w-[70%]">{{ $wine['breed'] }}</div>
        </div>
        <div class="flex">
          <div class="w-[30%] text-center">ワイナリー</div>
          <div class="w-[70%]">{{ $wine['winery'] }}</div>
        </div>
        <div class="flex">
          <div class="w-[30%] text-center">インポーター</div>
          <div class="w-[70%]">{{ $wine['importer'] }}</div>
        </div>
      </div>
      <div class="border-b-2 w-auto mx-2"></div>
      <div class="w-full h-[31vh] border-r-green-100 text-white my-2">
        <div class="text-black px-3">他にもこんなワインはいかがですか</div>
        <div class="flex flex-nowrap overflow-x-scroll mt-2">
          <div class="flex w-[calc(100% * {{ count($wine_list) }})] h-[31vh] text-black">
            @include('components.list', ['list' => $wine_list])
          </div>
        </div>
      </div>
    </div>

    <!-- Main modal -->
    <div id="modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
      <div class="relative w-full h-full max-w-2xl md:h-auto">
        <form action="/list" method="patch">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Terms of Service
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <div class="flex items-center mb-4">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
              </div>
              <div class="flex items-center">
                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-1 border-t border-gray-200 rounded-b dark:border-gray-600">
              <!-- <button data-modal-hide="modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button> -->
              <input type="submit" value="Add" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            </div>
          </div>
        </form>
      </div>
    </div>

    <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700 px-2">
      <form action="/list" method="post">
        @method('patch')
        @csrf
        <input disabled hidden name="wine_id" type="text" value="{{ $wine['id'] }}">
        <ul class="h-48 px-3 py-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
          @foreach($lists as $list)
            <li>
              <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                @if($list['list_exists'] === 1)
                  <input checked disabled id="checkbox-item-{{ $list['id'] }}" name="checkbox-item-{{ $list['id'] }}" type="checkbox" value="list-{{ $list['id'] }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="checkbox-item-{{ $list['id'] }}" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $list['name'] }}</label>
                @else
                  <input id="checkbox-item-{{ $list['id'] }}" name="checkbox-item-{{ $list['id'] }}" type="checkbox" value="list-{{ $list['id'] }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                  <label for="checkbox-item-{{ $list['id'] }}" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $list['name'] }}</label>
                @endif
              </div>
            </li>
          @endforeach
        </ul>
        <button type="submit" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-red-500 hover:underline">
          <svg class="w-5 h-5 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.927,5.828h-4.41l-1.929-1.961c-0.078-0.079-0.186-0.125-0.297-0.125H4.159c-0.229,0-0.417,0.188-0.417,0.417v1.669H2.073c-0.229,0-0.417,0.188-0.417,0.417v9.596c0,0.229,0.188,0.417,0.417,0.417h15.854c0.229,0,0.417-0.188,0.417-0.417V6.245C18.344,6.016,18.156,5.828,17.927,5.828 M4.577,4.577h6.539l1.231,1.251h-7.77V4.577z M17.51,15.424H2.491V6.663H17.51V15.424z"></path>
          </svg>
          Add List
        </button>
      </form>
    </div>

</x-app-layout>
