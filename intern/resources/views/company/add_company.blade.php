@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="p-5">Add Company</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{route('insert.company')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name</label>
                        <input type="text" name="cp_name" class="form-control" id="companyName" placeholder="Enter your company name" value="{{ old('cp_name') }}" required>

                        @error('cp_name')
                        <div class="invalid-feedback pt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection