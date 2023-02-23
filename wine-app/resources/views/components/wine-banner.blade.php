<div class="bg-white rounded p-2 my-2 flex justify-content-between shadow-lg">
  <div class="w-[25%] flex flex-col justify-center">
    <img src="/wine/00001.png" alt="">
  </div>
  <div class="w-[60%]">
    <div class="pr-3 font-semibold">{{ $wine['name'] }}</div>
    <div>{{ $wine['color'] }} / {{ $wine['type'] }}</div>
    @php
      $sp = round($wine['sommelier_point'] * 2, 0)/ 2.0
    @endphp
    <div><span class="star10_rating" data-rate="{{ $sp }}"></span></div>
  </div>
  <div class="w-[15%] text-sm flex flex-auto px-100">
    <a href="/info/{{ $wine['id'] }}" class="btn rounded bg-sky-500 text-white px-full bold py-auto">詳<br>し<br>く</a>
  </div>
</div>
