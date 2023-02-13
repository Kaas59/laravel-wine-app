<div class="bg-white rounded p-2 my-2 flex justify-content-between">
  <div class="w-[25%] ">
    <img src="/wine/00001.png" alt="">
  </div>
  <div class="w-[60%]">
    <div>ワイン名</div>
    <div>wine_color / wine_type</div>
    <div><span class="star10_rating" data-rate="8"></span></div>
  </div>
  <div class="w-[15%] text-sm flex flex-auto">
    <button type="button" onclick="location.href='{{ route('info') }}?wine=1' " class="btn rounded bg-sky-500 text-white px-1 bold">詳しく</button>
  </div>
</div>
