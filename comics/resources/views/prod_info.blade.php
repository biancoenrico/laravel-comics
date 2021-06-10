@extends('layouts.app')

@section('main-content')
    <div class="main-background-product">
        <div class="blue">
        </div>
        <div class="container-main">

            <div class="thumb_img">
                <img src="{{ $single['thumb'] }}" alt=""> 
            </div>

            <h1>{{ $single['title'] }}</h1>
            <div class="green">
                <div class="flex">
                    <div class="price">
                        <span>
                            U.S Price: {{ $single['price'] }}
                        </span>
                        <span>
                            AVAILABLE
                        </span>
                    </div>
                    <div class="available">
                        <span>
                            Check Availability
                        </span>
                    </div>
                </div>
            </div>
            <div>
                <p class="description">
                    {{ $single['description'] }}
                </p>
            </div>
        </div>
    </div>
    <div class="info">
        <div class="container-main">
            <div class="flex">
                <div class="talent">
                    <h2>Talent</h2>
                    <div class="bottom_info">
                        <hr>
                        <div class="row">
                            <span>Art by</span>
        
                            <div class="cont">
                                <ul>
                                    @foreach ($single['artists'] as $name)
                                        <li>
                                            {{ $name }},
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span>Written by</span>
                        
                            <div class="cont">
                                <ul>
                                    @foreach ($single['writers'] as $name)
                                        <li>
                                            {{ $name }},
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="specs">
                    <h2>Specs</h2>
                    <div class="bottom_info">
                        <hr>
                        <div class="row">
                            <span>series</span>
        
                            <div class="cont">
                                {{ $single['series'] }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span>U.S Price:</span>
                        
                            <div class="cont">
                                <ul>
                                     {{ $single['price'] }}
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span>on sale date:</span>
                        
                            <div class="cont">
                                <ul>
                                     {{ $single['sale_date'] }}
                                </ul>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="merch bottom">
        <ul>
            <li>
                <a class="flex" href="#">
                    <i class="fas fa-mobile-alt"></i>
                    <span>DIGITAL COMICS</span>
                </a>
            </li>
            <li>
                <a class="flex" href="#">
                    <i class="fas fa-tshirt"></i>
                    <span>DC MERCHANDISE</span>
                </a>
            </li>
            <li>
                <a class="flex" href="#">
                    <i class="fas fa-bolt"></i>
                    <span>SUBSCRIPTION</span>
                </a>
            </li>
            <li>
                <a class="flex" href="#">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>COMIC SHOP LOCATOR</span>
                </a>
            </li>
            <li>
                <a class="flex" href="#s">
                    <i class="fab fa-cc-visa"></i>
                    <span>DC POWER VISA</span>
                </a>
            </li>
        </ul>
    </div>
@endsection