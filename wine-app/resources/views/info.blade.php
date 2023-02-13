<x-app-layout>
    <x-slot name="header">
        <h2 class="text-sm text-gray-800 leading-tight">
            〇〇な時におすすめ
        </h2>
    </x-slot>
    <div class="bg-slate-500 h-[79.5vh] p-3 w-screen">
      <div class="flex mb-3">
        <img src="/wine/00001.png" alt="" class="w-[40vw] mx-auto rounded-lg">
        <div class="my-3 flex flex-col justify-around">
          <div>wine_color / wine_type</div>
          <div>ワイン名</div>
          <div><span class="star10_rating" data-rate="8"></span></div>
          <div>AAA産</div>
        </div>
      </div>
      <div class="mb-3 mx-3 flex flex-col justify-around h-[15vh]">
        <div class="flex">
          <div class="w-[30%] text-center">品種</div>
          <div class="w-[70%]">AAAA</div>
        </div>
        <div class="flex">
          <div class="w-[30%] text-center">ワイナリー</div>
          <div class="w-[70%]">AAAA</div>
        </div>
        <div class="flex">
          <div class="w-[30%] text-center">インポーター</div>
          <div class="w-[70%]">AAAA</div>
        </div>
      </div>
      <div class="border-b-2 w-auto mx-2"></div>
      <div class="w-full border-r-green-100 text-white my-5 px-5">
        <div class="text-black">他にもこんなワインはいかがですか</div>
        <div class="flex flex-nowrap overflow-x-scroll mt-2">
          <div class="flex w-[calc(70% * {{ count($list) }})] h-[15vh]">
            @include('components.list', $list)
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
