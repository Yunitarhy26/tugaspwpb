@extends('layouts.app')

  @section('content')
   
   <div class="container">
    <h1>JURUSAN DI SMK MAHAPUTRA</h1>
    <tr>
      <td>REKAYASA PERANGKAT LUNAK</td>
    </tr>
    <br>
    <tr>
      <td>MULTIMEDIA</td>
    </tr>
  </div>
  <div class="container">
    <table class="table table-light">
      <thead class="table-dark">
        <tr>
          <td>nama</td>
          <td>kelas</td>
          <td>alamat</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{ $d->nama }}</td>
          <td>{{ $d->kelas }}</td>
          <td>{{ $d->alamat }}</td>
          <td>
            <a href="{{ route('edit.siswa', $d->id ) }}" class="btn btn-primary btn-sm">edit</a>
            <form action="{{ route('delete.siswa', $d->id) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger btn-sm">hapus</button>
            </form>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

   @endsection