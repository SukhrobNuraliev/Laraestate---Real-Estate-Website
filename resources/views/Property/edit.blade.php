@extends('layout.app')

@section('title')
    Laraestate | редактировать имущество
@endsection

@section('content')
    
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(/img/bg-img/r.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">редактировать имущество</h3>
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
                        <h6>редактировать</h6>
                    </div>
                </div>
            </div>


        <form action="{{ route('properties.update', ['property' => $property->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <p>Фото (max-3)</p>
                            <div style="border: grey groove; border-radius:6px; padding:1rem;" class="form-group">
                                <label for="main-photo">Главное фото</label>
                                <input value="{{ old('photo1') }}" required type="file" class="form-control" name="photo1" placeholder="Photo 1">
                                @error('photo1')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <input value="{{ old('photo2') }}" type="file" class="form-control" name="photo2"  placeholder="Photo 2">
                            @error('photo2')
                                <p style="color: red;">{{ $message }}</p>
                            @enderror
                            <input value="{{ old('photo3') }}" type="file" class="form-control" name="photo3"  placeholder="Photo 3">
                            @error('photo3')
                                <p style="color: red;">{{ $message }}</p>
                            @enderror
                            
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                        <input value="{{ $property->title }}" required type="text" class="form-control" name="title" id="contact-name" placeholder="заглавие">
                            @error('title')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                            <input value="{{ $property->price }}" required type="text" class="form-control" name="price" id="contact-name" placeholder="цена - $">
                            @error('price')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                            <input value="{{ $property->size }}" required type="text" class="form-control" name="size" id="contact-name" placeholder="площадь - mKv">
                            @error('size')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                            <input value="{{ $property->location }}" required type="text" class="form-control" name="location" id="contact-name" placeholder="местонахождение">
                            @error('location')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        
                            <div class="form-group">
                                <input value="{{ $property->name }}" required type="text" class="form-control" name="name" placeholder="Ваше имя">
                                @error('name')
                                <p style="color: red;">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input value="{{ $property->phone }}" required type="tel" class="form-control" name="phone" placeholder="Ваш телефон">
                                @error('phone')
                                <p style="color: red;">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <textarea required class="form-control" name="description"  cols="30" rows="10" placeholder="Описание">{{ $property->description }}</textarea>
                                @error('description')
                                <p style="color: red;">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input value="{{ $property->short_description }}" required type="text" class="form-control" name="short_description"  placeholder="Краткое описание (1 пред)">
                                @error('short_description')
                                <p style="color: red;">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input value="{{ $property->rooms }}" required type="text" class="form-control" name="rooms" placeholder="Комнаты">
                                        @error('rooms')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <input value="{{ $property->garages }}" required type="text" class="form-control" name="garages" placeholder="Гаражи">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <input value="{{ $property->bathrooms }}" required type="text" class="form-control" name="bathrooms" placeholder="ванные комнаты">
                                    @error('bathrooms')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input  value="{{ $property->f1 }}" type="text" class="form-control" name="f1" placeholder="черты">
                                    </div>
                                    <div class="form-group">
                                        <input  value="{{ $property->f2 }}" type="text" class="form-control" name="f2" placeholder="черты">
                                    </div>
                                    <div class="form-group">
                                        <input  value="{{ $property->f3 }}" type="text" class="form-control" name="f3" placeholder="черты">
                                    </div>
                                    <div class="form-group">
                                        <input  value="{{ $property->f4 }}" type="text" class="form-control" name="f4" placeholder="черты">
                                    </div>
                                    <div class="form-group">
                                        <input  value="{{ $property->f5}}" type="text" class="form-control" name="f5" placeholder="черты">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input  value="{{ $property->f6 }}" type="text" class="form-control" name="f6" placeholder="черты">
                                    </div>
                                    <div class="form-group">
                                        <input  value="{{ $property->f7 }}" type="text" class="form-control" name="f7" placeholder="черты">
                                    </div>
                                    <div class="form-group">
                                        <input  value="{{ $property->f8 }}" type="text" class="form-control" name="f8" placeholder="черты">
                                    </div>
                                    <div class="form-group">
                                        <input  value="{{ $property->f9 }}" type="text" class="form-control" name="f9" placeholder="черты">
                                    </div>
                                    <div class="form-group">
                                        <input  value="{{ $property->f10 }}" type="text" class="form-control" name="f10" placeholder="черты">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn south-btn">сохранить</button>
                     
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>

@endsection