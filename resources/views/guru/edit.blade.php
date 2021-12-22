@extends('layouts.app')
@section('data_guru', 'edit data guru')
@section('content')
<div class="wrapper">
  <h1>Edit data guru</h1>
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
  
  <form method="POST" action="{{ url('guru', $guru->id ) }}">
    @csrf
    @method('PUT')
    <input name="nip" value="{{ $guru->nip }}" type="text" placeholder="edit nip..."> 
    <input name="nama_guru" value="{{ $guru->nama_guru }}" type="text" placeholder="edit nama guru...">
    <input name="mapel" value="{{ $guru->mapel }}" type="text" placeholder="edit mapel...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection