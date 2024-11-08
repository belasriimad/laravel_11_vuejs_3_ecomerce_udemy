@extends('admin.layouts.app')

@section('title')
    Add new coupon
@endsection

@section('content')
    <div class="row">
        @include('admin.layouts.sidebar')
        <div class="col-md-9">
            <div class="card-header bg-white">
                <h3 class="mt-2">
                    Add new coupon
                </h3>
            </div>
            <hr>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <form action="{{route('admin.coupons.store')}}" method="post">
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
                            <div class="mb-3">
                                <label for="discount" class="form-label">Discount*</label>
                                <input
                                    type="number"
                                    class="form-control @error('discount') is-invalid @enderror"
                                    name="discount"
                                    id="discount"
                                    value="{{old('discount')}}"
                                    aria-describedby="helpId"
                                    placeholder="Discount*"
                                />
                                @error('discount')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="valid_until" class="form-label">Validity*</label>
                                <input
                                    type="datetime-local"
                                    min="{{\Carbon\Carbon::now()->addDays(1)}}"
                                    value="{{\Carbon\Carbon::now()->format('Y-m-d\Th:i:s')}}"
                                    class="form-control @error('valid_until') is-invalid @enderror"
                                    name="valid_until"
                                    id="valid_until"
                                    aria-describedby="helpId"
                                    placeholder="Validity*"
                                />
                                @error('valid_until')
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
