<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl max-x-vw px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between flex-row text-center">
      <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        Home
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('new')" :active="request()->routeIs('root')">
        New
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('search')" :active="request()->routeIs('search')">
        Search
      </x-responsive-nav-link>
      <x-responsive-nav-link :href="route('mypage')" :active="request()->routeIs('mypage')">
        Profile
      </x-responsive-nav-link>
    </div>
  </div>
</nav>
