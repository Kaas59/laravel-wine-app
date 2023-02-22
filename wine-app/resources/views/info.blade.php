<x-app-layout>
    <x-slot name="header">
        <h2 class="text-sm text-gray-800 leading-tight">
            〇〇な時におすすめ
        </h2>
    </x-slot>
    <div class="bg-slate-500 h-[79.5vh] p-3 w-screen">
      <div class="flex mb-3">
        <img src="/wine/00001.png" alt="" class="w-[40vw] mx-auto rounded-lg">
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
      <div class="mb-3 mx-3 flex flex-col justify-around h-[15vh]">
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
      <div class="w-full h-[30vh] border-r-green-100 text-white my-2 px-1">
        <div class="text-black">他にもこんなワインはいかがですか</div>
        <div class="flex flex-nowrap overflow-x-scroll mt-2">
          <div class="flex w-[calc(100% * {{ count($list) }})] h-[25vh] text-black">
            @include('components.list', $list)
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
