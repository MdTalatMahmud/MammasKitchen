@extends('layouts.app')

@section('title', 'Category')

@push('css')


    @endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add category</h4>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                </div>

                                <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>


                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection

        @push('scripts')

            @endpush








