<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
        <h2 class="tm-gold-text tm-title">Introduction</h2>
        <p class="tm-subtitle">Suspendisse ut magna vel velit cursus tempor ut nec nunc. Mauris vehicula, augue in tincidunt porta, purus ipsum blandit massa.</p>
    </div>
</div>
<div class="row">

    @foreach ($posts as $key=>$post)
    @if ($key<=3)
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <div class="tm-content-box">
            <img src="{{ asset($post->image) }}" alt="Image" class="tm-margin-b-20 img-fluid">
            <h4 class="tm-margin-b-20 tm-gold-text">{{ $post->title }}</h4>
            <p class="tm-margin-b-20">{{ \Illuminate\Support\Str::limit($post->description, 100, $end='...') }}</p>
            <p>Created By:<b>{{ $post->user->name }}</b> </p>
            <a href="#" class="tm-btn text-uppercase">Read More</a>    
        </div>  
    </div>
    @endif
    @endforeach
</div> 