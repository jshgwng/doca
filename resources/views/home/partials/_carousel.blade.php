  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
        <img src="{{ asset('images/bg-one.jpg') }}" alt="" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="text-white">Dr. Obote College Alumni Association</h1>
            <p>Integer id neque dui. Fusce non metus ac justo ultricies congue nec nec ex. Nunc et orci massa. <br> Nunc sit amet semper enim. Duis aliquet sollicitudin mauris, eget condimentum ex egestas non. Praesent a nisi sit amet turpis venenatis rutrum. <br> Aenean mollis imperdiet erat et sagittis. Integer ac est in dolor elementum elementum in a nibh. Nam aliquam nisl at congue pellentesque.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Join today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
        <img src="{{ asset('images/bg-two.jpg') }}" alt="" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="text-white">Alumni Story</h1>
            <p>Integer id neque dui. Fusce non metus ac justo ultricies congue nec nec ex. Nunc et orci massa. <br> Nunc sit amet semper enim. Duis aliquet sollicitudin mauris, eget condimentum ex egestas non. Praesent a nisi sit amet turpis venenatis rutrum. <br> Aenean mollis imperdiet erat et sagittis. Integer ac est in dolor elementum elementum in a nibh. Nam aliquam nisl at congue pellentesque.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
        <img src="{{ asset('images/bg-three.jpg') }}" alt="" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="text-white">Alumni activities</h1>
            <p>Integer id neque dui. Fusce non metus ac justo ultricies congue nec nec ex. Nunc et orci massa. <br> Nunc sit amet semper enim. Duis aliquet sollicitudin mauris, eget condimentum ex egestas non. Praesent a nisi sit amet turpis venenatis rutrum. <br> Aenean mollis imperdiet erat et sagittis. Integer ac est in dolor elementum elementum in a nibh. Nam aliquam nisl at congue pellentesque.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>