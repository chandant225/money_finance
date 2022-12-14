@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">services</h3>
                    </div>
                    <!-- /.card-header -->
                    @if (count($services) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There is not any service avaliable yet.
                            </p>
                        </center>
                    @elseif(count($services) >= 1)
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
                                @foreach ($services as $service)
                                    <tbody>
                                        <tr>
                                            <td>{{ $service->id }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>{{ $service->category }}</td>
                                            <td>{{ $service->status }}</td>
                                            <td>{{ $service->menu_list }}</td>
                                            <td><img src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                                    alt="{{ $service->title }}" class="w-25 img-responsive" />
                                            </td>
                                            <td class="d-flex"><button class="btn btn-primary"><a class="text-white"
                                                        href="{{ route('admin.service.edit', ['id' => $service->id]) }}">Edit</a></button>
                                                <form method="post"
                                                    action="{{ route('admin.service.delete', ['id' => $service->id]) }}">
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
                                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <section> {!! $service->description !!}</section>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Understood</button>
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
