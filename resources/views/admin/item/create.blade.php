@extends('layouts.app')

@section('title', 'Item Create')

@push('css')


    @endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add items here</h4>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{route('item.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Category</label>
{{--                                        <input type="text" class="form-control" name="name" required>--}}
                                        <select class="form-control" name="cat">
                                            @foreach($cats as $cat)
                                                    <option value="{{$cat->id}}">
                                                        {{$cat->name}}
                                                    </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Description</label>
{{--                                        <input type="text" class="form-control" name="name" required>--}}
                                        <textarea class="form-control" name="description">

                                        </textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Price</label>
                                        <input type="number" class="form-control" name="price">

                                    </div>
                                </div>

                                <div class="col-md-12">

                                        <label class="bmd-label-floating">Image</label>
                                        <input type="file" name="image">


                                </div>

                                <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
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








