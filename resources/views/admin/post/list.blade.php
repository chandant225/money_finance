@extends('admin.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">posts</h3>
                    </div>
                    <!-- /.card-header -->
                    @if (count($posts) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There is not any post avaliable yet.
                            </p>
                        </center>
                    @elseif(count($posts) >= 1)
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>title</th>
                                        <th>category</th>
                                        <th>status</th>
                                        <th>list in menu</th>
                                        <th>image</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @foreach ($posts as $post)
                                    <tbody>
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->category }}</td>
                                            <td>{{ $post->status }}</td>
                                            <td>{{ $post->menu_list }}</td>
                                            <td><img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                                    alt="{{ $post->title }}" class="w-25 img-responsive" />
                                            </td>
                                            <td class="d-flex"><button class="btn btn-primary"><a class="text-white"
                                                        href="{{ route('admin.post.edit', ['id' => $post->id]) }}">Edit</a></button>
                                                <form method="post"
                                                    action="{{ route('admin.post.delete', ['id' => $post->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                                </form>
                                                <button data-toggle="modal"
                                                    data-target="#staticBackdrop{{ $loop->iteration }}" type="button"
                                                    class="btn btn-warning ml-2"><a class="text-white" href="#">View
                                                        Content</a></button>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop{{ $loop->iteration }}"
                                        data-backdrop="static" data-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Description</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <section> {!! $post->description !!}</section>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
