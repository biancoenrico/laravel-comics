
@extends('layouts.app')

@section('main-content')
    main-background-product
@endsection

@section('main')
    <div class="container">
        <div class="current">
           <strong>CURRENT SERIES</strong> 
        </div>
        <div class="flex">
            @foreach ($comics_array as $item)
                <div class="comics">
                    <div class="thumb">
                        <a href="{{ route('product',['id' => $item['id']]) }}">
                            <img src="{{ $item['thumb'] }}" alt="">
                        </a> 
                        <br>
                        <span>
                            {{ $item['title'] }}
                        </span>
                    </div>
                </div>
            @endforeach
            <div class="more">
                load more
            </div>
        </div>
    </div>
    <div class="merch">
        <ul>
            <li>
                <a href="#">
                    <i class="fas fa-mobile-alt"></i>
                    <span>DIGITAL COMICS</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tshirt"></i>
                    <span>DC MERCHANDISE</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-bolt"></i>
                    <span>SUBSCRIPTION</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>COMIC SHOP LOCATOR</span>
                </a>
            </li>
            <li>
                <a href="#s">
                    <i class="fab fa-cc-visa"></i>
                    <span>DC POWER VISA</span>
                </a>
            </li>
        </ul>
    </div>
@endsection