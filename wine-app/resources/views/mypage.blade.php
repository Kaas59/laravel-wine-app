<x-app-layout>
    <div class="flex flex-col justify-around items-center w-screen bg-gradient-to-r from-cyan-500 to-blue-500 h-[60vw] ">
      <image src="https://pbs.twimg.com/profile_images/1191321800757542912/CQ1BigB4_400x400.jpg" class="rounded-full w-[35vw] h-[35vw] shadow-lg">
      <div class="text-3xl bold">{{ $user['name'] }}</div>
    </div>
    <div>
      <!-- <div class="h-[59.5vh] bg-slate-500 flex flex-col overflow-y-scroll">
          <div class="bg-white m-2 h-full rounded text-center">リスト機能　　Comming Soon</div>
          <div class="bg-white m-2 h-full rounded text-center">リスト機能　　Comming Soon</div>
          <div class="bg-white m-2 h-full rounded text-center">リスト機能　　Comming Soon</div>
          <div class="bg-white m-2 h-full rounded text-center">リスト機能　　Comming Soon</div>
      </div>
    </div> -->
    <!-- <div class="h-[59.5vh] w-full bg-slate-500 flex justify-center items-center"> -->
      <!-- <div class="text-white">リスト機能 Coming Soon</div> -->
    <!-- </div> -->
    <div class="flex flex-col flex-nowrap overflow-y-scroll h-[59.5vh] w-[100vw] bg-slate-500">
      <div>
        @foreach($lists as $list)
            <div class="h-[30vh] my-2">
              <p class="m-2 ">{{ $list[0] }}<span class="mx-2">編集</span></p>
              <div class="flex flex-nowrap overflow-x-scroll">
                <div class="flex w-[calc(100% * {{ count($lists) }})] h-[28vh]">
                  @include('components.list', ['list' => $list[1]])
                </div>
              </div>
            </div>
            <div class="border-b-2 w-auto mx-2"></div>
        @endforeach
      </div>
    </div>
</x-app-layout>
