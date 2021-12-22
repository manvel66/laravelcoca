@extends('layouts.app')
@section('data_guru', 'data ruangan Edit')
@section('content')
<div class="wrapper">
  <h1>Edit data ruangan</h1>
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
  
  <form method="POST" action="{{ url('ruangan', $ruangan->id ) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Edit no ruangan</label>
      <input type="text" name="no_ruangan" value="{{ $ruangan->no_ruangan }}" placeholder="edit no ruangan" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
      <label for="exampleInput" class="form-label">Edit nama ruangan</label>
      <input type="text" name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}" placeholder="edit nama ruangan" class="form-control" id="exampleInput">
    </div>
   
    <button class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection