<?php 

namespace App\Http\Controllers;
use App\Blog;

class BlogController extends controller{
	function index(){
		$data['list_blog'] = Blog::all();
		return view('blog.index', $data);
	}
	function create(){
		return view('blog.create');
	}
	function store(){
		$blog= new Blog;
		$blog-> judul = request('judul');
		$blog-> Isi = request('Isi');
		$blog->save();

		return redirect('blog')->with('success', 'Data berhasil ditambahkan');
	}
	function show(Blog $blog){
		$data['blog'] = $blog;
		return view('blog.show', $data);
	}
	function edit(Blog $blog){
		$data['blog'] = $blog;
		return view('blog.edit', $data);
	}
	function update(Blog $blog){
		$blog-> judul = request('judul');
		$blog-> Isi = request('Isi');
		$blog->save();

		return redirect('blog');
	}
	function destroy(Blog $blog){
		$blog->delete();

		return redirect('blog')->with('denger', 'Data berhasil ditambahkan');	
	}  
	
} 