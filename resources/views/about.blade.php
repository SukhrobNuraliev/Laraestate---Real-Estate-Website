@extends('layout.app')

@section('title')
    Laraestate | О Нас
@endsection

@section('content')
    
        <!-- ##### Breadcumb Area Start ##### -->
        <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/r.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h3 class="breadcumb-title">О Нас</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Breadcumb Area End ##### -->


         <!-- ##### About Content Wrapper Start ##### -->
    <section class="about-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>МЫ ИЩЕМ ИДЕАЛЬНЫЙ ДОМ</h2>
                        <p>Покупка и продажа домов</p>
                    </div>
                    <div class="about-content">
                        <img class="wow fadeInUp" data-wow-delay="350ms" src="img/bg-img/1.jfif" alt="">
                        <p class="wow fadeInUp" data-wow-delay="450ms">«Купля / Продажа квартир и недвижимости в Ташкенте» является основной тематикой нашего сайта. Только у нас Вы можете найти самое большое количество объявлений о продаже квартиры на любой вкус и цену. Объявления покупки представлены на нашем портале в самом полном объеме. Вы можете просмотреть любые варианты объявлений по квартирам, как от лиц риэлторов, так и напрямую от владельцев квартиры из любого района города Ташкент.</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>Рекомендуемые имущество</h2>
                        <p>Покупка и продажа домов</p>
                    </div>

                    <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">


                        @foreach ($properties as $property)
                                <!-- Single Slide -->
                                <div class="single-featured-property">
                                    <!-- Property Thumbnail -->
                                    <div class="property-thumb">
                                        <a href="{{ route('properties.show', ['property' => $property->id]) }}"><img src="{{ asset('storage/properties/'.$property->photo1) }}" alt=""></a>

                                        <div class="tag">
                                            <span>For Sale</span>
                                        </div>
                                        <div class="list-price">
                                        <p>${{$property->price}}</p>
                                        </div>
                                    </div>
                                    <!-- Property Content -->
                                    <div class="property-content">
                                        <a href="{{ route('properties.show', ['property' => $property->id]) }}"><h5>{{ $property->title }}</h5></a>
                                        <p class="location"><img src="/img/icons/location.png" alt="">{{ $property->location }}</p>
                                        <p>{{ $property->short_description }}</p>
                                        <div class="property-meta-data d-flex align-items-end justify-content-between">
                                            <div class="new-tag">
                                                <img src="/img/icons/new.png" alt="">
                                            </div>
                                            <div class="bathroom">
                                                <img src="/img/icons/bathtub.png" alt="">
                                                <span>{{ $property->bathrooms }}</span>
                                            </div>
                                            <div class="garage">
                                                <img src="/img/icons/garage.png" alt="">
                                                <span>{{ $property->garages }}</span>
                                            </div>
                                            <div class="space">
                                                <img src="/img/icons/space.png" alt="">
                                                <span>{{ $property->size }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                    </div>
                </div>
            </div>

            <div style="margin-top: 6rem" class="row">
                <!-- ##### Milestones ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Cтатистика</h2>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area mb-100">
                        <img src="img/icons/prize2.png" alt="">
                        <h2><span class="counter">14</span></h2>
                        <h6>Годы опыта</h6>
                    </div>
                </div>
                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area mb-100">
                        <img src="img/icons/new2.png" alt="">
                        <h2>+<span class="counter">1000</span></h2>
                        <h6>Довольные клиенты</h6>
                    </div>
                </div>
                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area mb-100">
                        <img src="img/icons/house2.png" alt="">
                        <h2><span class="counter">14</span>k</h2>
                        <h6>Подписчики</h6>
                    </div>
                </div>
                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area mb-100">
                        <img src="img/icons/house1.png" alt="">
                        <h2><span class="counter">723</span></h2>
                        <h6>Готовые проекты</h6>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### About Content Wrapper End ##### -->

@endsection