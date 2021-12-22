@extends('layouts.app')
@section('data_guru', 'kelas Edit')
@section('content')
<div class="wrapper">
  <h1>Edit data kelas</h1>
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
  
  <form method="POST" action="{{ url('kelas', $kelas->id ) }}">
    @csrf
    @method('PUT')
    <input name="kelas" value="{{ $kelas->kelas }}" type="text" placeholder="edit kelas..."> 
    <input name="jurusan" value="{{ $kelas->jurusan }}" type="text" placeholder="edit jurusan...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection