@extends('blogtemplate.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data produk
					</div>
					<div class="card-body">
						<h4>{{$blog->judul}}</h4><hr>
						<p>
						Rp.200{{number_format($blog->harga)}} |
							Stok : {{$blog->stok}} |
							Berat : {{$blog->berat}} gr |
							Warna : {{$blog->warna}} gr|
							 	</p>
							<p>
								{{"@".$blog->Isi}}
						</p>
					
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection