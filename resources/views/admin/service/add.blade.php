@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <center>
            <h3 class="py-2">Add Service</h3>
        </center>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <form method="post" action="{{ route('admin.service.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title"
                                name="title" value="{{ old('title') }}">
                            <span class="text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="" class="form-control">
                                <option value="" selected>choose category</option>
                                <option value="service">Service</option>
                                <option value="blogs">Blogs</option>
                                <option value="about">About-us</option>
                            </select>
                            <span class="text-danger">
                                @error('category')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Enter the Description" name="description"></textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="image" type="file" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            <span class="text-danger">
                                @error('status')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="menu_list">Link to menu</label>
                            <select name="menu_list" id="" class="form-control">
                                <option value="false">Not required</option>
                                <option value="true">link to menu</option>
                            </select>
                            <span class="text-danger">
                                @error('menu_list')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{ route('admin.service.editor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        })
    </script>
@endpush
