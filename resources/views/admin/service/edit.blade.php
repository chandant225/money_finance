@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <center>
            <h3 class="py-2">Edit Service</h3>
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
                <form method="post" action="{{ route('admin.service.update', ['id' => $service->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title"
                                name="title" value="{{ $service->title }}">
                            <span class="text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="3" name="description" placeholder="Enter description">{{ $service->description }}</textarea>
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
                            <img src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                alt="{{ $service->title }}" class="w-100 img-responsive" />
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
