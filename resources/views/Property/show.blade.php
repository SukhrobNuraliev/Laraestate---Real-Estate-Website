@extends('layout.app')

@section('title')
    Laraestate | {{$property->title}}
@endsection

@section('content')
    
    <!-- ##### Listings Content Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div style="margin-top: 5rem" class="row">
                <div class="col-12">
                    <!-- Single Listings Slides -->
                    <div class="single-listings-sliders owl-carousel">
                        <!-- Single Slide -->
                        <img src="{{ asset('storage/properties/'.$property->photo1) }}" alt="">
                        <!-- Single Slide -->
                        {{-- @if ( DB::table('properties')->where('photo2', 'default.jpg')->exists()) --}}
                        {{-- @else --}}
                        <img src="{{ asset('storage/properties/'.$property->photo2) }}" alt="">
                        {{-- @endif --}}
                        <!-- Single Slide -->
                        {{-- @if (  DB::table('properties')->where('photo3', 'default.jpg' )->exists()) --}}
                        {{-- @else --}}
                        <img src="{{ asset('storage/properties/'.$property->photo3) }}" alt="">
                        {{-- @endif --}}
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="listings-content">
                        <!-- Price -->
                        <div class="list-price">
                        <p>${{$property->price}}</p>
                        </div>
                        <h5>{{$property->title}}</h5>
                        <p class="location"><img src="/img/icons/location.png" alt="">{{$property->location}}</p>
                        <p>{{$property->description}}</p>
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end">
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
                                <span>{{$property->size}} mkv</span>
                            </div>
                        </div>
                        <!-- Core Features -->
                        <ul class="listings-core-features d-flex align-items-center">
                            <li><i class="fa fa-check" aria-hidden="true"></i> {{ $property->f1 }}</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> {{ $property->f2 }} </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> {{ $property->f3 }}</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> {{ $property->f4 }} </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> {{ $property->f5 }} </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> {{ $property->f6 }} </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> {{ $property->f7 }} </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> {{ $property->f8 }} </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> {{ $property->f9 }} </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> {{ $property->f10 }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact-realtor-wrapper">
                        <div class="realtor-info">
                            <img src="/img/bg-img/11.jpg" alt="">
                            <div class="realtor---info">
                                <h2>Сухроб Нуралиев</h2>
                                <p>Риэлтор</p>
                                <h6><img src="/img/icons/phone-call.png" alt=""> +777 777 77 77</h6>
                                <h6><img src="/img/icons/envelope.png" alt=""> lalala@gmail.com</h6>
                            </div>
                            <div class="realtor--contact-form">
                                <form action="/properties/{{ $property->id }}/contact" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input value="{{ old('name') }}" name="name" required style="border-radius: 3px" type="text" class="form-control" id="realtor-name" placeholder="Ваше имя">
                                        @error('name')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input  value="{{ old('phone') }}" required name="phone" style="border-radius: 3px"  type="tel" class="form-control" id="realtor-number" placeholder="Ваш номер">
                                        @error('phone')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <textarea required style="border-radius: 3px"  name="message" class="form-control" id="realtor-message" cols="30" rows="10" placeholder="Ваше сообщение">{{ old('message') }}</textarea>
                                        @error('message')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn south-btn">Отправить сообщение</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Listing Maps -->
            <div class="row">
                <div class="col-12">
                    <div class="listings-maps mt-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4238.252353155107!2d69.27607655251609!3d41.311104720770366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b2931f41f23%3A0x81095e06b654b845!2sSkver%20Im.%20Amira%20Temura!5e0!3m2!1sen!2s!4v1596531873595!5m2!1sen!2s" width="950" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>



            <div style="text-align: center; margin-top:3rem;">
                <a href="{{ route('properties.edit', ['property' => $property->id]) }}" style="background: rgb(75, 48, 48)"  class="btn south-btn">редактировать имущество</a>
            </div>

            <form method="POST" action="{{ route('properties.destroy', ['property' => $property->id]) }}">
                @csrf
                @method('DELETE')
                <div style="text-align: center; margin-top:3rem;">
                    <button style="background: rgb(124, 0, 0)" type="submit" class="btn south-btn">Удалить имущество</button>
                </div>
            </form>
        </div>
    </section>
    <!-- ##### Listings Content Area End ##### -->

@endsection