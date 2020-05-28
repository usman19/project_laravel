@extends('layouts/main')

@section('title', 'Daftar Mahasiswa')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-10">
          <h1 class="mt-3">Daftar Mahsiswa</h1>

          <table class="table">
          	<thead class="thead-dark">
          	  <tr>
          		<th scope="col">#</th>
          		<th scope="col">Nama</th>
          		<th scope="col">NPM</th>
          		<th scope="col">Email</th> 
          		<th scope="col">Jurusan</th>
          		<th scope="col">Aksi</th>
          	  </tr>
          	</thead>
          	<tbody>
          	  @foreach( $mhs as $mahas)
          	  <tr>
          		<th scope="row">{{ $loop->iteration }}</th>
          		<td>{{ $mahas->nama }}</td>
          		<td>{{ $mahas->npm }}</td>
          		<td>{{ $mahas->email }}</td>
          		<td>{{ $mahas->jurusan }}</td>
          		<td>
          			<a href="{{ url('/edit/'.$mahas->id) }}" class="badge badge-success">edit</a>
          			<a href="{{ url('/delete/'.$mahas->id) }}" class="badge badge-danger">delete</a>
          		</td>
          	  </tr>
          	  @endforeach
          	</tbody>
          </table>
        </div>
      </div>
    </div>

@endsection
