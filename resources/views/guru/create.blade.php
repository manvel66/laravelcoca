@extends('layouts.app')
@section('data_guru', 'data guru baru')
@section('content')
<div class="wrapper">
  <h1>data guru baru</h1>
  <a href="/guru" ><button type="button" class="btn btn-primary">kembali</button></a>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <form method="POST" action="{{ url('guru') }}">
    @csrf
    <input name="nip" type="text" placeholder="masukan nip..."> 
    <input name="nama_guru" type="text" placeholder="masukkan nama guru...">
    <input name="mapel" type="text" placeholder="masukkan mapel...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection