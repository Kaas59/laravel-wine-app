@foreach($list as $wine)
  <a href="info?wine={{ $wine['id'] }}" class="m-3 w-[25vh] h-[25vh] bg-white rounded p-1 shadow-sm relative">
    <img src="/wine/00001.png" class="object-cover" alt="{{ $wine['image'] }}">
    <span class="text-sm absolute top-2 left-2 bg-slate-700/50 w-[23vh] text-white font-bold rounded p-2">{{ $wine['name'] }}</span>
  </a>
@endforeach
