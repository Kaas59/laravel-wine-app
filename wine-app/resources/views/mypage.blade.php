<x-app-layout>
    <div class="flex flex-col justify-around items-center w-screen bg-gradient-to-r from-cyan-500 to-blue-500 h-[60vw] ">
      <image src="https://pbs.twimg.com/profile_images/1191321800757542912/CQ1BigB4_400x400.jpg" class="rounded-full w-[35vw] h-[35vw] shadow-lg">
      <div class="text-3xl bold">{{ $user['name'] }}</div>
    </div>
    <div class="bg-slate-500">
      <div class="w-[100vw] h-auto text-center py-2 bg-slate-500/50 bg-gradient-to-t relative">
          <span class="text-2xl font-bold">マイリスト</span>
          <a href="/" class="absolute right-2 bg-blue-600 hover:bg-blue-500 text-white rounded px-3 py-1 shadow-sm">New</a>
      </div>
      <div class="flex flex-col flex-nowrap overflow-y-scroll h-[54vh] w-[100vw] bg-slate-500">
        <div>
          @foreach($lists as $list)
              <div class="h-[32vh] my-2">
                <div class="relative px-2 pt-2">
                  <span class="text-xl font-medium">{{ $list[0] }}</span>
                  <a href="/" class="absolute right-2 bg-sky-600 hover:bg-sky-500 text-white rounded px-3 py-1 shadow-sm">Edit</a>
                </div>
                <div class="flex flex-nowrap overflow-x-scroll">
                  @php
                    $width = count($lists) ;
                  @endphp
                  <div class="flex w-[calc(100% * {{ $width }})] h-[28vh]">
                    @include('components.list', ['list' => $list[1]])
                  </div>
                </div>
              </div>
              <div class="border-b-2 w-auto mx-2"></div>
          @endforeach
        </div>
      </div>
    </div>
</x-app-layout>
