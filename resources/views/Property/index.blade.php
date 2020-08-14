@extends('layout.app')

@section('title')
    Laraestate | Имущество
@endsection

@section('content')
    
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(/img/bg-img/r.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">имущество</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <a href="{{ route('properties.create') }}">
                            <div class="search-title">
                                <p>Добавить имущество</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->



    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">

            @foreach ($properties->chunk(3) as $chunk)
                
            <div class="row">

                @foreach ($chunk as $property)
                    
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                        <a href="{{ route('properties.show', ['property' => $property->id]) }}"><img src="{{ asset('storage/properties/'.$property->photo1) }}" alt=""></a>

                            <div class="tag">
                                <span>Продается</span>
                            </div>
                            <div class="list-price">
                            <p>${{ $property->price }}</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <a href="{{ route('properties.show', ['property' => $property->id]) }}"><h5>{{ $property->title }}</h5></a>
                            <p class="location"><img src="/img/icons/location.png" alt=""> {{ $property->location }} </p>
                            <p> {{ $property->short_description }} </p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="/img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="/img/icons/bathtub.png" alt="">
                                    <span> {{$property->bathrooms}} </span>
                                </div>
                                <div class="garage">
                                    <img src="/img/icons/garage.png" alt="">
                                    <span> {{$property->garages}} </span>
                                </div>
                                <div class="space">
                                    <img src="/img/icons/space.png" alt="">
                                    <span> {{$property->size}} mkv</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

            @endforeach

        </div>
    </section>
    <!-- ##### Listing Content Wrapper Area End ##### -->

@endsection