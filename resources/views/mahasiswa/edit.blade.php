@extends('layouts/main')

@section('title', 'Edit Data');

@section('container')
	<div class="container">
		<form action="/update/{{ $mhs->id }}" method="post">
			@method('PUT')
			@csrf
		      <div class="form-group col-md-6">
			    <label>Nama</label>
			    <input type="text" class="form-control" name="nama" value="{{$mhs->nama}}">
			  </div>
			  <div class="form-group col-md-6">
			    <label>NPM</label>
			    <input type="text" class="form-control" name="npm" value="{{$mhs->npm}}">
			  </div>
			  <div class="form-group col-md-6">
			    <label>Email</label>
			    <input type="email" class="form-control" aria-describedby="emailHelp" name="email" value="{{$mhs->email}}">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group col-md-6">
			    <label>Jurusan</label>
			    <input type="text" class="form-control" name="jurusan" value="{{$mhs->jurusan}}">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection