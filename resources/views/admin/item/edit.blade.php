@extends('layouts.app')

@section('title', 'Item')

@push('css')


@endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit Item</h4>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{route('item.update', $item->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Category</label>
                                        {{--                                        <input type="text" class="form-control" name="name" required>--}}
                                        <select class="form-control" name="cat">
                                            @foreach($cats as $cat)
                                                <option {{$cat->id == $item->cat['id'] ? 'selected' : ''}} value="{{$cat->id}}">
                                                    {{$cat->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name" required value="{{$item->name}}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Description</label>
                                        {{--                                        <input type="text" class="form-control" name="name" required>--}}
                                        <textarea class="form-control" name="description">
                                            {{$item->description}}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Price</label>
                                        <input type="number" class="form-control" name="price" value="{{$item->price}}">

                                    </div>
                                </div>

                                <div class="col-md-12">

                                    <label class="bmd-label-floating">Image</label>
                                    <input type="file" name="image">


                                </div>

{{--                                <div class="col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="bmd-label-floating">Name</label>--}}
{{--                                        <input type="text" class="form-control" name="name" value="{{$item->name}}" required>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
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








