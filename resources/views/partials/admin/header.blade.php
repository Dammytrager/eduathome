<?php

use Illuminate\Support\Facades\Route;

$currentRoute = request()->path();

$links = $header['links'];

$headerTitle = $header['title'];

?>

<div class="bg-white p-3 shadow-sm mt-2 admin-header mb-4">

    <div class="font-size-lg">
        <i class="{{ $headerTitle['icon'] }} mr-2"></i>
        {{ $headerTitle['label'] }}
    </div>

    <div class="links mt-2">
        @foreach($links as $key => $link)

            @if(!$link['route'])
                <span class="text-muted font-size-nm">{{ $link['label'] }}</span>
            @else
                <a href="{{ $link['route'] }}" class="text-body font-size-nm">{{ $link['label'] }}</a>
            @endif


            @if($key + 1 != count($links)) - @endif
        @endforeach
    </div>
</div>
