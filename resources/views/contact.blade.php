@extends('layout.app')

@section('title')
    Laraestate | Связаться
@endsection

@section('content')
    
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(/img/bg-img/r.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Связаться</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Контактная информация</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Понедельник - Пятница</span> <span>09  - 19 </span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Суббота</span> <span>09  - 14 </span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Воскресенье</span> <span>Закрыто</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="/img/icons/phone-call.png" alt=""> +7777 777 77 77</h6>
                            <h6><img src="/img/icons/envelope.png" alt=""> laraestate@laraestaet.uz</h6>
                            <h6><img src="/img/icons/location.png" alt=""> Ташкент, Мирзо-улугбекский район
                                ,<br>Дархан-3</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="/contact" method="post">
                            @csrf
                            <div class="form-group">
                            <input value="{{ old('name') }}" required type="text" class="form-control" name="name" id="contact-name" placeholder="Ваше имя">
                            @error('name')
                            <p style="color: red">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input value="{{ old('phone') }}" required type="tel" class="form-control" name="phone" id="contact-number" placeholder="Ваш телефон">
                                @error('phone')
                            <p style="color: red">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <textarea  required class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Ваше сообщение">{{ old('message') }}</textarea>
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
    </section>

@endsection