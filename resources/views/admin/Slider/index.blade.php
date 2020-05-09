@extends('layouts.app')

@section('title', 'Slider')

@push('css')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    @endpush

@section('content')
    <div class="content">

{{--        message showing--}}
        @if(session('successMsg'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{session('successMsg')}}</strong>
            </div>
        @endif

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Sliders</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped " style="width:100%">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Sub-title
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Created at
                                    </th>
                                    <th>
                                        Updated at
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($sliders as $key=> $slider)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $slider -> title }}</td>
                                                <td>{{ $slider -> sub_title }}</td>
                                                <td>{{ $slider -> image }}</td>
                                                <td>{{ $slider -> created_at }}</td>
                                                <td>{{ $slider -> updated_at }}</td>

                                                <td><a href="{{route('slider.edit', $slider->id)}}" class="btn btn-primary">Edit</a>

                                                <form id="delete-form-{{$slider->id}}" action="{{route('slider.destroy', $slider->id)}}" style="display: none" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <a href="{{route('slider.edit', $slider->id)}}" class="btn btn-danger"
                                                    onclick="if(confirm('Are you sure?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$slider->id}}').submit();
                                                    }else{
                                                        event.preventDefault();
                                                        }">Delete</a></td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>




    @endsection

        @push('scripts')


            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#table').DataTable();
                } );
            </script>

        @endpush








