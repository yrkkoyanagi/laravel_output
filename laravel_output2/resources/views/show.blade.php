<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>検索結果</title>

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        @forelse($shops as $shop)
          <div>{{ $shop->shop_name }}</div>
          <div>{{ $shop->shop_pref }}{{$shop->shop_city}}</div>
          <div>{{ $shop->nearest_station }}駅</div>

        @empty
        <span>検索結果に該当するお店はありませんでした</span>

        @endforelse

        </div>
    </body>
</html>
