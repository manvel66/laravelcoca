@extends('layouts.app')
@section('data_guru', 'data siswa Edit')
@section('content')
<div class="wrapper">
  <h1>Edit data siswa</h1>
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
  
  <form method="POST" action="{{ url('siswa', $siswa->id ) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Edit absen</label>
      <input type="text" name="absen" value="{{ $siswa->absen}}" placeholder="edit absen" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
      <label for="exampleInput" class="form-label">Edit nama siswa</label>
      <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}" placeholder="edit nama siswa" class="form-control" id="exampleInput">
    </div>
   
    <button class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection