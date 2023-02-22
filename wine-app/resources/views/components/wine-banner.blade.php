<div class="bg-white rounded p-2 my-2 flex justify-content-between shadow-lg">
  <div class="w-[25%] flex flex-col justify-center">
    <img src="/wine/00001.png" alt="">
  </div>
  <div class="w-[60%]">
    <div class="pr-3">{{ $wine['name'] }}</div>
    <div>{{ $wine['color_id'] }} / {{ $wine['type_id'] }}</div>
    @php
      $sp = round($wine['sommelier_point'] * 2, 0)/ 2.0
    @endphp
    <div><span class="star10_rating" data-rate="{{ $sp }}"></span></div>
  </div>
  <div class="w-[15%] text-sm flex flex-auto px-100">
    <button type="button" onclick="location.href='{{ route('info') }}?wine={{ $wine['id'] }}' " class="btn rounded bg-sky-500 text-white px-full bold" >詳<br>し<br>く</button>
  </div>
</div>
