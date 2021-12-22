@extends('layouts.app')
@section('data_guru', 'Semua data kelas')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Semua data kelas</h1>
  <a href="kelas/create" ><button type="button" class="btn btn-primary">tambah data kelas</button></a>
  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%">
    <thead>
      <tr>
        <th>kelas</th>
        <th>jurusan</th>
        <th colspan="2">edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kelas as $kl)
      <tr>
        <td style="width: 200px" >{{ $kl->kelas}}</td>
        <td style="width: 500px" >{{ $kl->jurusan }}</td>
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('kelas.edit', $kl->id) }}">Edit</a></button></td>
  <form method="POST" action="{{ url('kelas', $kl->id ) }}">
    @csrf
    @method('DELETE')
    <td style="width: 100px"><button class="btn-red">Hapus</button></td>
  </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection