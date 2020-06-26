@extends('layouts.app')

@section('title', 'Category')

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
                            <h4 class="card-title ">All Categories</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped " style="width:100%">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Slug
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
                                        @foreach($categories as $key=> $category)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $category -> name }}</td>
                                                <td>{{ $category -> slug }}</td>

                                                <td>{{ $category -> created_at }}</td>
                                                <td>{{ $category -> updated_at }}</td>

                                                <td><a href="{{route('category.edit', $category->id)}}" class="btn btn-primary">Edit</a>

                                                <form id="delete-form-{{$category->id}}" action="{{route('category.destroy', $category->id)}}" style="display: none" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <a href="{{route('category.edit', $category->id)}}" class="btn btn-danger"
                                                    onclick="if(confirm('Are you sure?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$category->id}}').submit();
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








