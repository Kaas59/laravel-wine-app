<x-app-layout>
    <x-slot name="header">
        <h2 class="text-sm text-gray-800 leading-tight">
            〇〇な時におすすめ
        </h2>
    </x-slot>
    <div class="bg-slate-500 h-[79.5vh] py-3 w-screen text-white">
      <div class="flex px-3">
        <img src="/wine/00001.png" alt="" class="w-[40vw] mx-auto rounded-lg shadow-sm">
        <div class="my-3 flex flex-col justify-around px-3">
          <div>{{ $wine['color_id'] }} / {{ $wine['type_id'] }}</div>
          <div>{{ $wine['name'] }}</div>
          @php
            $sp = round($wine['sommelier_point'] * 2, 0)/ 2.0
          @endphp
          <div><span class="star10_rating" data-rate="{{ $sp }}"></span></div>
          <div>{{ $wine['country_id'] }}産</div>
        </div>
      </div>
      <div class="w-full my-1">
        <div class="flex flex-row-reverse px-3">
          <button type="button" class="addListBtn bg-sky-600 hover:bg-sky-500 text-white rounded px-3 py-1 mx-1 shadow-sm">Add List</button>
        </div>
      </div>
      <div class="mb-3 mx-3 px-3 flex flex-col justify-around h-[15vh]">
        <div class="flex">
          <div class="w-[30%] text-center">品種</div>
          <div class="w-[70%]">{{ $wine['breed_id'] }}</div>
        </div>
        <div class="flex">
          <div class="w-[30%] text-center">ワイナリー</div>
          <div class="w-[70%]">{{ $wine['winery_id'] }}</div>
        </div>
        <div class="flex">
          <div class="w-[30%] text-center">インポーター</div>
          <div class="w-[70%]">{{ $wine['importer_id'] }}</div>
        </div>
      </div>
      <div class="border-b-2 w-auto mx-2"></div>
      <div class="w-full h-[31vh] border-r-green-100 text-white my-2">
        <div class="text-black px-3">他にもこんなワインはいかがですか</div>
        <div class="flex flex-nowrap overflow-x-scroll mt-2">
          <div class="flex w-[calc(100% * {{ count($list) }})] h-[31vh] text-black">
            @include('components.list', $list)
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
