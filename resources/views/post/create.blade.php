@extends('layouts.master')

@section('post')
<section class="contact-section">
    <div class="container">
<div class="row">
<div class="col-12">
                <h2 class="contact-title">Create Post</h2>
            </div>
            <form action="/posts" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Title">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">body</label>
                <input type="text" class="form-control" name="body" id="body" placeholder="Masukkan Body">
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>
</div>
</section>
@endsection