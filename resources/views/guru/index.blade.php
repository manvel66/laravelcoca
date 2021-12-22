@extends('layouts.app')
@section('data_guru', 'Semua data guru')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Semua data guru</h1>
  <a href="guru/create" ><button type="button" class="btn btn-primary">tambah data guru</button></a>
  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%">
    <thead>
      <tr>
        <th>nip</th>
        <th>nama guru</th>
        <th>mapel</th>
        <th colspan="2">edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($gurus as $gr)
      <tr>
        <td style="width: 200px" >{{ $gr->nip}}</td>
        <td style="width: 500px" >{{ $gr->nama_guru }}</td>
        <td style="width: 500px" >{{ $gr->mapel }}</td>
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('guru.edit', $gr->id) }}">Edit</a></button></td>
  <form method="POST" action="{{ url('guru', $gr->id ) }}">
    @csrf
    @method('DELETE')
    <td style="width: 200px"><button class="btn-red">Hapus</button></td>
  </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection