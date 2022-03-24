<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

    <div class="tm-content-box">
        <img src="{{ asset($imagePath ?? 'frontend/img/tm-img-310x180-1.jpg')}}" alt="Image" class="tm-margin-b-20 img-fluid">
        <h4 class="tm-margin-b-20 tm-gold-text">{{ $title ?? '' }}</h4>
        <p class="tm-margin-b-20">{{ \Illuminate\Support\Str::limit($description, 100, $end='...') ?? '' }}</p>
        <a href="#" class="tm-btn text-uppercase">Detail</a>    
        <p>Created By:<b>{{ $author ?? ''}}</b> </p>
    </div>  

</div>