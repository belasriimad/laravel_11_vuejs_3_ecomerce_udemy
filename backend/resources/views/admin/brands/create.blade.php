@extends('admin.layouts.app')

@section('title')
    Add new brand
@endsection

@section('content')
    <div class="row">
        @include('admin.layouts.sidebar')
        <div class="col-md-9">
            <div class="card-header bg-white">
                <h3 class="mt-2">
                    Add new brand
                </h3>
            </div>
            <hr>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <form action="{{route('admin.brands.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name*</label>
                                <input
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    id="name"
                                    value="{{old('name')}}"
                                    aria-describedby="helpId"
                                    placeholder="Name*"
                                />
                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button
                                type="submit"
                                class="btn btn-sm btn-dark"
                            >
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection