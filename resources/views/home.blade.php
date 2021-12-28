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
<header>
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
  </header>
@endsection
