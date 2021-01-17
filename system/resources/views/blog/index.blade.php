@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Data produk
						<a href="{{url('blog/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>judul</th>
								<th>Isi</th>
								
								
							</thead>
							<tbody>
								@foreach($list_blog as $blog)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('Blog', $blog->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('Blog', $blog->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include ('template.utils.delete', ['url' => url ('blog', $blog->id)])
										
									</td>
									<td>{{$blog->judul}}</td>
									<td>{{$blog->Isi}}</td>
									
								</tr>
								@endforeach
							</tbody>							
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection