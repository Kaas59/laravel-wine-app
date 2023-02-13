<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            New
        </h2>
    </x-slot>

    <div class="bg-slate-500 h-[78.5vh] p-3 w-screen">
      <div class="flex flex-col flex-nowrap overflow-y-scroll h-full">
        @include('components.wine-list')
        @include('components.wine-list')
        @include('components.wine-list')
        @include('components.wine-list')
        @include('components.wine-list')
        @include('components.wine-list')
        @include('components.wine-list')
        @include('components.wine-list')
        @include('components.wine-list')
      </div>
    </div>
    <!-- <div>
    <a :href="'/info?id=' + id" class="card">
      <div class="image">
        <img :src="require(`../assets/wine/${uri}`)" :alt="alt">
      </div>
      <div class="info">
        <div class="title">name</div>
        <div class="color_type">種類：wine_color / wine_type</div>
        <div class="sp">SP：<span class="star10_rating" :data-rate="calcStar"></span></div>
      </div>
      <div class="button">
        <div>¥/div>
        <input class="searchShop" type="button" value="Soon" disabled>
      </div>
    </a>
  </div> -->
</x-app-layout>
