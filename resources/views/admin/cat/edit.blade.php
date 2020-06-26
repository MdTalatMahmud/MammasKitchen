@extends('layouts.app')

@section('title', 'Edit')

@push('css')


@endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit category</h4>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{route('cat.update', $cat->id) }}" >
                                @csrf
                                @method('PUT')
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$cat->name}}" required>
                                    </div>
                                </div>
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="bmd-label-floating">Sub-title</label>--}}
{{--                                        <input type="text" class="form-control" name="sub_title" value="{{$cat->sub_title}}" required>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}

{{--                                    <label class="bmd-label-floating">Image</label>--}}
{{--                                    <input type="file" class="form-control" name="image" >--}}

{{--                                </div>--}}
                                <a href="{{route('cat.index')}}" class="btn btn-danger">Back</a>
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








