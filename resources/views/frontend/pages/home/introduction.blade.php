<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
        <h2 class="tm-gold-text tm-title">Introduction</h2>
        <p class="tm-subtitle">Suspendisse ut magna vel velit cursus tempor ut nec nunc. Mauris vehicula, augue in tincidunt porta, purus ipsum blandit massa.</p>
    </div>
</div>
<div class="row">

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
        @foreach ($posts as $post)
        <div class="tm-content-box">
            <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
            <h4 class="tm-margin-b-20 tm-gold-text">{{ $post->title }}</h4>
            <p class="tm-margin-b-20">{{}}</p>
            <a href="#" class="tm-btn text-uppercase">Detail</a>    
        </div>  
        @endforeach
    </div>
</div> 