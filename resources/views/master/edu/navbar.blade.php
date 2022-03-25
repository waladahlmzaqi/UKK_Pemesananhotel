<!-- navbar -->
<div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0" style="height: 70px;">
        <a class="navbar-brand" href="index.html"><img src="{{asset('edu/images/logo.png')}}" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center" style="height: 70px;">
            <li class="nav-item active">
              <a class="nav-link martop" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link martop" href="#kamar">Kamar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link martop" href="#fasilitas">Fasilitas</a>
            </li>
            <li class="nav-item dropdown view">
                <a class="nav-link dropdown-toggle martop" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="teacher.html">Teacher</a>
                  <a class="dropdown-item" href="teacher-single.html">Teacher Single</a>
                  <a class="dropdown-item" href="notice.html">Notice</a>
                  <a class="dropdown-item" href="notice-single.html">Notice Details</a>
                  <a class="dropdown-item" href="research.html">Research</a>
                  <a class="dropdown-item" href="scholarship.html">Scholarship</a>
                  <a class="dropdown-item" href="course-single.html">Course Details</a>
                  <a class="dropdown-item" href="event-single.html">Event Details</a>
                  <a class="dropdown-item" href="blog-single.html">Blog Details</a>
                </div>
            </li>

            @auth
            <form action="/logout" method="post">
                @csrf
                {{-- <li class="nav-item">
                    <a class="nav-link" type="submit">Logout</a>
                </li> --}}
                <button type="submit" class="btn btn-primary martop" style="margin-top: 7px;">Logout</button>
            </form>
            @else
            <li class="nav-item">
                <a class="nav-link martop" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link martop" href="/register">Register</a>
            </li>
            @endauth

          </ul>
        </div>
      </nav>
    </div>
</div>
