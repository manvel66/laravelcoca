@extends('layouts.app')
@section('data_guru', 'Semua data siswa')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Semua data siswa</h1>
  <a href="siswa/create" ><button type="button" class="btn btn-primary">tambah data siswa</button></a>
  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%">
    <thead>
      <tr>
        <th>absen</th>
        <th>nama siswa</th>
        <th colspan="2">edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($siswa as $sw)
      <tr>
        <td style="width: 200px" >{{ $sw->absen}}</td>
        <td style="width: 500px" >{{ $sw->nama_siswa }}</td>
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('siswa.edit', $sw->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('siswa', $sw->id ) }}">
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