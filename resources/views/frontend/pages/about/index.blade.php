@extends('frontend.layouts.master')

@section('content')
<div class="tm-about-img-container">            
</div>

<section class="tm-section">
    <div class="container-fluid">
        <div class="row tm-2-rows-sm-swap">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-2-rows-sm-down-2">
                <h3 class="tm-gold-text">Sidebar Links</h3>
                <nav>
                    <ul class="nav">
                        <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                        <li><a href="#" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                        <li><a href="#" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                        <li><a href="#" class="tm-text-link">Fusce non turpis euismod</a></li>
                        <li><a href="#" class="tm-text-link">Nam in augue consectetur</a></li>
                        <li><a href="#" class="tm-text-link">Text Link Color #006699</a></li>
                    </ul>
                </nav>   
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 tm-2-rows-sm-down-1">
                <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                <p>Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                <p>Quisque vel sem eu turpis ullamcorper euismod. Praesent quis nisi ac augue luctus viverra. Sed et dui nisi. Fusce vitae dapibus justo. Pellentesque accumsan est ac posuere imperdiet. Curabitur eros mi, lacinia at euismod quis, dapibus vel ligula. Ut sodales erat vitae nunc tempor mollis. Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros.</p>
                <p>
                Classic Template provides a great flexibility to arrange the content in any way you like. Please tell your friends about templatemo. Nam sem neque, finibus id sem pharetra, cursus porttitor ligula. Praesent aliquam fermentum dui, vitae venenatis libero vulputate ac. Fusce bibendum scelerisque magna eget iaculis.</p>
            </div>
        </div>
        
        <div class="row tm-margin-t-mid">
            <div class="col-xs-12">
                <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                <p>Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                <p>Nulla ultrices nibh ac accumsan lobortis. Nulla facilisi. Praesent velit ante, congue ac dignissim in, vehicula sit amet urna. Fusce in dapibus quam, eget finibus velit. Nullam erat odio, vulputate id est ut, consequat rutrum justo. Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id.</p>
            </div>
        </div>

        <div class="row tm-margin-t-mid">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-sm-m-b">
                <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                <p>Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat.</p>
                <p>Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                <p>
                    Fusce in dapibus quam, eget finibus velit. Nullam erat odio, vulputate id est ut, consequat rutrum justo. Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Quisque vel sem eu turpis ullamcorper euismod. Praesent quis nisi ac augue luctus viverra. Sed et dui nisi.
                </p>
                <p>
                    Fusce vitae dapibus justo. Pellentesque accumsan est ac posuere imperdiet. Curabitur eros mi, lacinia at euismod quis, dapibus vel ligula. Ut sodales erat vitae nunc tempor mollis.
                </p>
            </div>

        </div>

        <div class="row tm-margin-t-mid">
            @foreach ($category->posts as $post)
            <x-vertical-card :title="$post->title" :description="$post->description" :imagePath="$post->image" 
                :author="$post->user->name" />
            @endforeach
        </div> 
    </div>
</section>
@endsection