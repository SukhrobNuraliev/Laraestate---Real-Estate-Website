@extends('layout.app')

@section('title')
    Laraestate | Главный
@endsection

@section('content')
    
     <!-- ##### Hero Area Start ##### -->
     <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/b1.jfif);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Найдите свой дом</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/b2.jfif);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Найдите дом своей мечты</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/b3.jfif);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Найдите свой идеальный дом</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->


    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>ПРЕДЛАГАЕМЫЕ имущество</h2>
                        <p>лучшие дома по низким ценам.</p>
                    </div>
                </div>
            </div>


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
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(img/bg-img/1.jfif)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">ИЩЕТЕ МЕСТО ДЛЯ ПОКУПКИ?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">у нас есть лучшие предложения для вас.</h6>
                        <a href="/properties" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Дома</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->


    <!-- ##### Meet The Team Area Start ##### -->
    <section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>встречаетесь с командой</h2>
                        <p>наши лучшие агенты</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/bg-img/1.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2>Сухроб Нуралиев</h2>
                                <p>Риэлтор</p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +998 93 333 33 33</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> sukhrobnuralievv@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/bg-img/shah.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2>Шахриёр Арганов</h2>
                                <p>Риэлтор</p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +998 88 888 88 88</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> shah@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/bg-img/shox.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2>Шохрух Шодмонов</h2>
                                <p>Риэлтор</p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +998 99 999 99 99 </h6>
                                <h6><img src="img/icons/envelope.png" alt=""> shox@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->

@endsection