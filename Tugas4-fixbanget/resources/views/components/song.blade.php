<div class="card" style="width: 18rem;">
    <img src="{{ $song->image }}" class="card-img-top" alt="{{ $song->title }}">
    <div class="card-body">
      <h5 class="card-title">{{ $song->title }}</h5>
      <p class="card-text">artist name : {{ $song->artist }}</p>
      <p class="card-text">artist name : {{ $song->album }}</p>
      <p class="card-text">artist name : {{ $song->year }}</p>
      <p class="card-text">artist name : {{ $song->genre }}</p>
      <a href="#" class="btn btn-primary">Detail</a>
    </div>
</div>