@extends('layouts/main')

@section('title', 'Masukan Data')

@section('container')
	<div class="container">
		<form action="/store" method="post">
			{{ csrf_field() }}
		      <div class="form-group col-md-6">
			    <label>Nama</label>
			    <input type="text" class="form-control" name="nama">
			  </div>
			  <div class="form-group col-md-6">
			    <label>NPM</label>
			    <input type="text" class="form-control" name="npm">
			  </div>
			  <div class="form-group col-md-6">
			    <label>Email</label>
			    <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group col-md-6">
			    <label>Jurusan</label>
			    <input type="text" class="form-control" name="jurusan">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection