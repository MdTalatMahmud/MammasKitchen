@extends('layouts.app')

@section('title', 'Slider')

@push('css')


    @endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Sliders</h4>

                        </div>
                        <div class="card-body">
                            <form method="get" about="{{route('slider.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sub-title</label>
                                        <input type="text" class="form-control" name="sub_title">
                                    </div>
                                </div>
                                <div class="col-md-12">

                                        <label class="bmd-label-floating">Image</label>
                                        <input type="file" class="form-control" name="image">

                                </div>
                                <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>


                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        @endsection

        @push('scripts')

            @endpush







