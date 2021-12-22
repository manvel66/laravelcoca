@extends('layouts.app')
@section('data_guru', 'Buat data kelas Baru')
@section('content')
<div class="wrapper">
  <h1>Buat data kelas Baru</h1>
  <a href="/kelas" ><button type="button" class="btn btn-primary">kembali</button></a>
  
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
  
  <form method="POST" action="{{ url('kelas') }}">
    @csrf
    <input name="kelas" type="text" placeholder="masukkan kelas..."> 
    <input name="jurusan" type="text" placeholder="masukkan jurusan...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection