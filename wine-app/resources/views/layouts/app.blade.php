<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="manifest" href="manifest.json">
        <link rel="manifest" href="manifest.webmanifest" />
        <script async src="https://cdn.jsdelivr.net/npm/pwacompat" crossorigin="anonymous"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

        <style>
          /* Star */
          .star10_rating{
              position: relative;
              z-index: 0;
              display: inline-block;
              white-space: nowrap;
              color: #CCCCCC; /* グレーカラー 自由に設定化 */
              /*font-size: 30px; フォントサイズ 自由に設定化 */
          }

          .star10_rating:before, .star10_rating:after{
              content: '★★★★★★★★★★';
          }

          .star10_rating:after{
              position: absolute;
              z-index: 1;
              top: 0;
              left: 0;
              overflow: hidden;
              white-space: nowrap;
              color: #ffcf32; /* イエローカラー 自由に設定化 */
          }
          .star10_rating[data-rate="10"]:after{ width: 100%; } /* 星10 */
          .star10_rating[data-rate="9.5"]:after{ width: 95%; } /* 星9.5 */
          .star10_rating[data-rate="9"]:after{ width: 90%; } /* 星9 */
          .star10_rating[data-rate="8.5"]:after{ width: 85%; } /* 星8.5 */
          .star10_rating[data-rate="8"]:after{ width: 80%; } /* 星8 */
          .star10_rating[data-rate="7.5"]:after{ width: 75%; } /* 星7.5 */
          .star10_rating[data-rate="7"]:after{ width: 70%; } /* 星7 */
          .star10_rating[data-rate="6.5"]:after{ width: 65%; } /* 星6.5 */
          .star10_rating[data-rate="6"]:after{ width: 60%; } /* 星6 */
          .star10_rating[data-rate="5.5"]:after{ width: 55%; } /* 星5.5 */
          .star10_rating[data-rate="5"]:after{ width: 50%; } /* 星5 */
          .star10_rating[data-rate="4.5"]:after{ width: 45%; } /* 星4.5 */
          .star10_rating[data-rate="4"]:after{ width: 40%; } /* 星4 */
          .star10_rating[data-rate="3.5"]:after{ width: 35%; } /* 星3.5 */
          .star10_rating[data-rate="3"]:after{ width: 30%; } /* 星3 */
          .star10_rating[data-rate="2.5"]:after{ width: 25%; } /* 星2.5 */
          .star10_rating[data-rate="2"]:after{ width: 20%; } /* 星2 */
          .star10_rating[data-rate="1.5"]:after{ width: 15%; } /* 星1.5 */
          .star10_rating[data-rate="1"]:after{ width: 10%; } /* 星1 */
          .star10_rating[data-rate="0.5"]:after{ width: 5%; } /* 星0.5 */
          .star10_rating[data-rate="0"]:after{ width: 0%; } /* 星0 */
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-[95vh] max-h-full bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <footer class="sticky bottom-0">
          @include('layouts.footer')
        </footer>
    </body>
</html>
