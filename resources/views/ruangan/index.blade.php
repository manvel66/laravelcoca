@extends('layouts.app')
@section('data_guru', 'Semua data ruangan')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Semua data ruangan</h1>
  <a href="ruangan/create" ><button type="button" class="btn btn-primary">tambah data ruangan</button></a>
  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%" class="table table-striped table-hover">
    <thead>
      <tr>
        <th>no ruangan</th>
        <th>nama ruangan</th>
        <th colspan="2">edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ruangan as $rg)
      <tr>
        <td style="width: 200px" >{{ $rg->no_ruangan}}</td>
        <td style="width: 500px" >{{ $rg->nama_ruangan }}</td>
        <td style="width: 100px"><a href="{{ route('ruangan.edit', $rg->id) }}"><button class="btn btn-primary">Edit</button></a></td>
  <form method="POST" action="{{ url('ruangan', $rg->id ) }}">
    @csrf
    @method('DELETE')
    <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td>
  </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection