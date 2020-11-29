@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Edit Data Blog
						<form action="{{url('blog')}}" method="post">
							@csrf
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">judul</label>
						<input type="text" name="judul" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">Isi</label>
						<input type="text" name="Isi" class="form-control">
					</div><div class="form-group">
						
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection