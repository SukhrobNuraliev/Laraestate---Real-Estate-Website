@extends('layout.app')

@section('title')
    Laraestate | редактировать пост
@endsection

@section('content')
    
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(/img/bg-img/r.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">редактировать пост</h3>
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


            <form action="{{ route('posts.show', ['post' => $post->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <div style="border: grey groove; border-radius:6px; padding:1rem;" class="form-group">
                                <label for="main-photo">фото</label>
                                <input value="{{ old('photo1') }}" required type="file" class="form-control" name="thumnail" >
                                @error('photo1')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <input value="{{ $post->author }}" required type="text" class="form-control" name="author" id="contact-name" placeholder="Author">
                            @error('author')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                            <input value="{{ $post->category }}" required type="text" class="form-control" name="category" id="contact-name" placeholder="Category">
                            @error('category')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                            <input value="{{ $post->tag }}" required type="text" class="form-control" name="tag" id="contact-name" placeholder="Tag">
                            @error('tag')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        
                            <div class="form-group">
                                <input value="{{$post->title }}" required type="text" class="form-control" name="title" placeholder="Title">
                                @error('title')
                                <p style="color: red;">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input value="{{ $post->description }}" required type="tel" class="form-control" name="description" placeholder="Description (short)">
                                @error('description')
                                <p style="color: red;">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <textarea required class="form-control blog-content" name="content"  cols="30" rows="40" placeholder="Content">{{ $post->content }}</textarea>
                                @error('content')
                                <p style="color: red;">{{ $message }}</p>
                            @enderror
                            </div>
                            <button type="submit" class="btn south-btn">сохранить</button>
                     
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>

@endsection