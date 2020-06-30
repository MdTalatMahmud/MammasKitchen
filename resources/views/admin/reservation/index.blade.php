@extends('layouts.app')

@section('title', 'Reservation')

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
                            <h4 class="card-title ">All Reservations</h4>

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
                                        Phone
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Time & Date
                                    </th>
                                    <th>
                                        Message
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Created at
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($reservations as $key=> $reservation)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $reservation -> name }}</td>
                                                <td>{{ $reservation -> phone }}</td>
                                                <td>{{ $reservation -> email }}</td>
                                                <td>{{ $reservation -> time_and_date }}</td>
                                                <td>{{ $reservation -> message }}</td>
                                                <td>
                                                    @if($reservation->status == true)
                                                        <span class="label label-info">Confirmed</span>
                                                    @else
                                                        <span class="label label-danger">Not Confirmed</span>
                                                    @endif
                                                </td>
                                                <td>{{ $reservation -> created_at }}</td>

{{--                                                <td><a href="" class="btn btn-primary">Edit</a>--}}
                                                <td>
                                                @if($reservation->status == false)
                                                    <form id="status-form-{{$reservation->id}}" action="{{ route('reservation.status', $reservation->id) }}" style="display: none" method="post">
                                                        @csrf
                                                    </form>
                                                    <a href="#" class="btn btn-info"
                                                       onclick="if(confirm('Are you sure?')){
                                                           event.preventDefault();
                                                           document.getElementById('status-form-{{$reservation->id}}').submit();
                                                           }else{
                                                           event.preventDefault();
                                                           }">Done</a>
                                                @endif

                                                    <form id="status-form-{{$reservation->id}}" action="{{ route('reservation.destroy', $reservation->id) }}" style="display: none" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a href="#" class="btn btn-danger"
                                                       onclick="if(confirm('Are you sure to delete?')){
                                                           event.preventDefault();
                                                           document.getElementById('status-form-{{$reservation->id}}').submit();
                                                           }else{
                                                           event.preventDefault();
                                                           }">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
{{--                {{route('slider.edit', $reservation->id)}}--}}
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








