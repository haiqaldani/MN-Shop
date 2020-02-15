@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Item</h1>
      </div>

      <!-- Content Row -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('items.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Item Name</label>
                        <input type="text" class="form-control" name="title" placeholder="Item Name" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="categories_id">Category</label>
                        <select name="categories_id" required class="form-control">
                            <option value="">Choose Category</option>
                            @foreach($categories as $categories)
                                <option value="{{ $categories->id }}">
                                    {{ $categories->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category_items_id">Category Item</label>
                        <select name="category_items_id" required class="form-control">
                            <option value="">Choose Category</option>
                            @foreach($category_items as $category_items)
                                <option value="{{ $category_items->id }}">
                                    {{ $category_items->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" placeholder="Image" >
                            <label class="custom-file-label" for="image">Choose File</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea type="text" class="form-control" name="about" placeholder="About" value="{{ old('about') }}"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
