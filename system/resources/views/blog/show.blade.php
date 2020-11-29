@extends('blogtemplate.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data Blog
					</div>
					<div class="card-body">
						<h4>{{$blog->judul}}</h4><hr>
						<p>
							 {{"@".$blog->Isi}}
							
						</p>
					
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection