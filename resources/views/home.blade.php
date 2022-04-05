@extends('template')

@section('container')
    <div class="container text-center">
        <h3>GUDANG BERITA</h3>
        <p>Muhammad Valda RIzky ~ 05111940000115</p>
        <br>
        <div class = row>
          <div class="col-sm-4">
           
            <a href="/article" class="text-decoration-none">PBKK Articles</a>
        </div>
          <div class="col-sm-4">
           
            <a href="/authors" class="text-decoration-none">See All Authors</a>
        </div>
          <div class="col-sm-4">
            
            <a href="/categories" class="text-decoration-none">See All Categories</a>
          </div>
        </div>
      </div>
      @endsection