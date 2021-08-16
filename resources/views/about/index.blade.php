@extends('layouts.app')

@section('content')
    @include('about.partials._hero')
    <div class="row container-fluid bg-light pt-5">
        <div class="col-md-9 col-lg-9">
            @include('about.partials._history')
            @include('about.partials._excom')
        </div>
        <div class="col-md-3 col-lg-3">
            @include('home.partials._sidebar')
        </div>
    </div>

<style>
    @media (min-width: 992px) {
  .rounded-lg-3 { border-radius: .3rem; }
}

body {
  background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
}

.container {
  max-width: 960px;
}

.pricing-header {
  max-width: 700px;
}

.bi {
  vertical-align: -.125em;
  fill: currentColor;
}

.feature-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 4rem;
  height: 4rem;
  margin-bottom: 1rem;
  font-size: 2rem;
  color: #fff;
  border-radius: .75rem;
}

.icon-link {
  display: inline-flex;
  align-items: center;
}
.icon-link > .bi {
  margin-top: .125rem;
  margin-left: .125rem;
  transition: transform .25s ease-in-out;
  fill: currentColor;
}
.icon-link:hover > .bi {
  transform: translate(.25rem);
}

.icon-square {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  font-size: 1.5rem;
  border-radius: .75rem;
}

.rounded-4 { border-radius: .5rem; }
.rounded-5 { border-radius: 1rem; }

.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}
</style>
@endsection