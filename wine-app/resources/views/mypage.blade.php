<x-app-layout>
    <div class="flex flex-col justify-around items-center w-screen bg-gradient-to-r from-cyan-500 to-blue-500 h-[60vw] ">
      <image src="/wine.png" class="rounded-full w-[35vw] h-[35vw] shadow-lg">
      <div class="text-3xl bold">{{ $user['name'] }}</div>
    </div>
    <div class="">
      <div class="w-[100vw] h-auto text-center py-2 relative">
          <span class="text-2xl font-bold">マイリスト</span>
          <!-- <a href="/" class="absolute right-2 bg-blue-600 hover:bg-blue-500 text-white rounded px-3 py-1 shadow-sm">New</a> -->
          <button type="button" data-modal-target="modal" data-modal-show="modal" class="absolute right-2 bg-blue-600 hover:bg-blue-500 text-white rounded px-3 py-1 shadow-sm">New</button>
      </div>
      <div class="flex flex-col flex-nowrap overflow-y-scroll h-[54vh] w-[100vw] ">
        <div>
          @foreach($lists as $list)
              <div class="h-[32vh] my-2">
                <div class="relative px-2 pt-2">
                  <span class="text-xl font-medium">{{ $list['name'] }}</span>
                  <a href="/list/{{ $list['id'] }}" class="absolute right-2 bg-sky-600 hover:bg-sky-500 text-white rounded px-3 py-1 shadow-sm">Edit</a>
                </div>
                <div class="flex flex-nowrap overflow-x-scroll">
                  @php
                    $width = count($lists);
                  @endphp
                  <div class="flex w-[calc(100% * {{ $width }})] h-[28vh]">
                    @include('components.list', ['list' => $list['wines']])
                  </div>
                </div>
              </div>
              <div class="border-b-2 w-auto mx-2"></div>
          @endforeach
        </div>
      </div>
    </div>


    <!-- Main modal -->
    <div id="modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
      <div class="relative w-full h-full max-w-2xl md:h-auto">
        <form action="/list" method="post">
          @method('post')
          @csrf
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                リスト作成
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <label for="list_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">リスト名</label>
              <input type="text" id="list_name" name="list_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-1 border-t border-gray-200 rounded-b dark:border-gray-600">
              <input type="submit" value="Add" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            </div>
          </div>
        </form>
      </div>
    </div>
</x-app-layout>
