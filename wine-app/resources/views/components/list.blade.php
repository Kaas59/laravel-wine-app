@foreach($list as $wine)
<a href="info?wine={{ $wine['id'] }}" class="mx-3 w-[10vh] h-[25vh] bg-white rounded p-1 shadow-lg">
  <img src="/wine/00001.png" class="" alt="{{ $wine['image'] }}">
  <span class="text-xs">{{ $wine['name'] }}</span>
</a>
@endforeach
