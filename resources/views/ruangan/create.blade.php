@extends('layouts.app')
@section('data_guru', 'Buat data ruangan Baru')
@section('content')
<div class="wrapper">
  <h1>Buat data ruangan Baru</h1>
  <a href="/ruangan" ><button type="button" class="btn btn-primary">kembali</button></a>
  
  
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
  
  <form method="POST" action="{{ url('ruangan') }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">buat no ruangan baru</label>
      <input type="text" name="no_ruangan"  placeholder="tambah no ruangan" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
      <label for="exampleInput" class="form-label">buat nama ruangan</label>
      <input type="text" name="nama_ruangan"  placeholder="tambah nama ruangan" class="form-control" id="exampleInput">
    </div>
   
    <button class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection