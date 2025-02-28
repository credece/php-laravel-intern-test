@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="p-5">Add Department</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{route('insert.department')}}" method="post">
                    @csrf
                
                    <!-- department Name -->
                    <div class="mb-3">
                        <label for="deptName" class="form-label">Department Name</label>
                        <input type="text" name="dept_name" class="form-control @error('dept_name') is-invalid @enderror"
                               id="" placeholder="Enter department name"
                               value="{{ old('dept_name') }}" required>
                        @error('dept_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    
                    <!-- Company Select -->
                    <div class="mb-3">
                        <label for="companySelect" class="form-label">Select Company</label>
                        <select name="company_id" class="form-control @error('company_id') is-invalid @enderror" id="companySelect" required>
                            <option value="">-- Select Company --</option>
                            @foreach($get_company as $company)
                                <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>
                                    {{ $company->com_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('company_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
@endsection