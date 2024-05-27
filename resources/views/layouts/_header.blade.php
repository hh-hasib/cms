<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
  <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
    <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
      <i class="flaticon-043-teddy-bear"></i>
      <span class="text-primary">Blog</span>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
      @php
        $getCategoryHeader = App\Models\CategoryModel::getCategoryMenu();
      @endphp
      <div class="navbar-nav font-weight-bold mx-auto py-0">
        <a href="{{ url('') }}" class="nav-item nav-link @if(Request::segment(1) == '') active @endif">Home</a>
        @foreach($getCategoryHeader as $CategoryHeader)
          <a href="{{ url($CategoryHeader->slug) }}" class="nav-item nav-link @if(Request::segment(1) == $CategoryHeader->slug) active @endif">{{ $CategoryHeader->name }}</a>
        @endforeach
      </div>
      @auth
        <a href="{{ url('panel/dashboard') }}" class="btn btn-primary px-4">Dashboard</a>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
          @csrf
          <button type="submit" class="btn btn-secondary px-4" style="margin-left: 8px;">Logout</button>
        </form>
      @else
        <a href="{{ url('login') }}" class="btn btn-primary px-4">Login</a>
        <a href="{{ url('register') }}" class="btn btn-primary px-4" style="margin-left: 8px;">Register</a>
      @endauth
    </div>
  </nav>
</div>
<!-- Navbar End -->
