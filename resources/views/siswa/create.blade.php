@extends('layouts.app')
@section('data_guru', 'Buat data siswa Baru')
@section('content')
<div class="wrapper">
  <h1>Buat data siswa Baru</h1>
  <a href="/siswa" ><button type="button" class="btn btn-primary">kembali</button></a>
  
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
  
  <form method="POST" action="{{ url('siswa') }}">
    @csrf
    <input name="absen" type="text" placeholder="masukkan absen..."> 
    <input name="nama_siswa" type="text" placeholder="masukkan nama siswa...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection