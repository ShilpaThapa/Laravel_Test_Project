<div class="media tm-related-post">
    <div class="media-left media-middle">
      <a href="#">
        <img class="media-object" src="{{ asset($url) ?? 'frontend/img/tm-img-240x120-1.jpg' }}" alt="Generic placeholder image">
      </a>
    </div>
    <div class="media-body">
      <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">{{ $title ?? '' }}</h4></a>
      <p class="tm-small-font tm-media-description">
        {{ \Illuminate\Support\Str::limit($description, 100, $end='...') ?? '' }}</p>
        <p>Created By:<b>{{ $author ?? ''}}</b> </p>
          </div>
  </div>