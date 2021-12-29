@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <header>
    <input type="checkbox" id="tag-menu"/>
    <label class="fa fa-bars menu-bar" for="tag-menu"></label>
    <div class="jw-drawer">
      <nav class="text-center">
        <ul>
          <li><a href="#"></i>&nbsp;&nbsp;profil</a></li>
          <li><a href="#"></i>&nbsp;&nbsp;absen</a></li>
          <li><a href="#"></i>&nbsp;&nbsp;task</a></li>
          <li><a href="#"></i>&nbsp;&nbsp;value</a></li>
          <li><a href="#"></i>&nbsp;&nbsp;quis</a></li>
        </ul>
      </nav>
    </div>
  </header> --}}

{{-- sidebar --}}
  <header>
    <input type="checkbox" id="tag-menu"/>
    <label class="fa fa-bars menu-bar" for="tag-menu"></label>
    <div class="jw-drawer">
      <nav class="">
        <ul>
          <li><a href="#">&nbsp;&nbsp;<i class='bx bx-user'></i>Profile </a></li>
          <li><a href="#">&nbsp;&nbsp;<i class='bx bx-calendar-check'></i>attendance</a></li>
          <li><a href="#">&nbsp;&nbsp;<i class='bx bx-book-reader'></i>Task</a></li>
          <li><a href="#">&nbsp;&nbsp;<i class='bx bx-timer'></i>Quiz</a></li>
          <li><a href="#">&nbsp;&nbsp;<i class='bx bx-award'></i>Value</a></li>
          <li><a href="#">&nbsp;&nbsp;<i class='bx bxs-contact'></i></i>contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

{{-- halaman profile --}}
  <div class="card mb-3" style="max-width: 1500px; margin:20px auto;padding:20px 0; background-color:rgba(191, 127, 221, 0.205)">
    <div class="row g-0">
      <div class="col-md-3 text-center">
        <img src="{{asset('image/profile.jpg')}}" class="img-fluid " style="border-radius:100%" >
      </div>
      <div class="col-md-7" style="margin:auto 0">
        <div class="card-body">
          <h2 class="card-title">Halo, {{Auth::user()->name}}</h2>
          <p class="card-text" style="font-size: 20px">selamat belajar {{Auth::user()->name}}, jangan lupa absen dan selesaikan tugasmu!</p>
          <p class="card-text">Last updated 3 mins ago</p>
        </div>
      </div>
    </div>
  </div>

{{-- halaman tugas --}}
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card mb-3" style="max-width: 1500px; margin:20px auto;padding:20px 0; background-color:rgba(191, 127, 221, 0.205)">
      <img src="{{asset('image/matematika3.jpg')}}" style="width:770px; height:150px" class="card-img-top" >
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mb-3" style="max-width: 1500px; margin:20px auto;padding:20px 0; background-color:rgba(191, 127, 221, 0.205)">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mb-3" style="max-width: 1500px; margin:20px auto;padding:20px 0; background-color:rgba(191, 127, 221, 0.205)">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mb-3" style="max-width: 1500px; margin:20px auto;padding:20px 0; background-color:rgba(191, 127, 221, 0.205)">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
@endsection
