@extends('layout.app')

@section('title')
    Post: {{ $post->title }}
@endsection

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(/img/bg-img/r.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Подробности поста</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    
    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    <div class="single-blog-area">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="{{asset('storage/thumnails/'.$post->thumnail)}}" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Date -->
                            <div class="post-date">
                                <a href="#">{{$post->created_at}}</a>
                            </div>
                            <!-- Headline -->
                            <a href="#" class="headline"{{$post->title}}</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p>автор  <a href="#">{{$post->author}}</a> | категория - <a href="#">{{$post->category}}</a> | тег - <a href="#">{{$post->tag}}</a></p>
                            </div>
                            <p>{{$post->content}}</p>
                        </div>
                    </div>


                </div>


                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Catagories Widget -->
                        <div class="south-catagories-card mb-70">
                            <h5>Теги</h5>
                            <ul class="catagories-menu">
                                @foreach ($posts as $post)
                                    <li><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{$post->tag}}</a></li>
                                @endforeach
                            </ul>
                        </div>


                       <!-- Catagories Widget -->
                       <div class="south-catagories-card mb-70">
                        <h5>Категории</h5>
                        <ul class="catagories-menu">
                            @foreach ($posts as $post)
                        <li><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{$post->category}}</a></li>
                            @endforeach
                        </ul>
                    </div>


                        <!-- Catagories Widget -->
                        <div class="featured-properties-slides owl-carousel">

                            @foreach ($properties as $property)
                                <!-- Single Slide -->
                                <div class="single-featured-property">
                                    <!-- Property Thumbnail -->
                                    <div class="property-thumb">
                                        <a href="{{ route('properties.show', ['property' => $property->id]) }}"><img src="{{ asset('storage/properties/'.$property->photo1) }}" alt=""></a>

                                        <div class="tag">
                                            <span>Продается</span>
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
            </div>

                <div style="text-align: center; margin-top:3rem;">
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" style="background: rgb(75, 48, 48)"  class="btn south-btn">редактировать пост</a>
                </div>
                
            <form method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                @csrf
                @method('DELETE')
                <div style="text-align: center; margin-top:3rem;">
                    <button style="background: rgb(124, 0, 0)" type="submit" class="btn south-btn">Удалить пост</button>
                </div>
            </form>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

@endsection