@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="p-5">Add Employee</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{route('insert.employee')}}" method="post">
                    @csrf
                
                    <!-- Employee Name -->
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Employee Name</label>
                        <input type="text" name="emp_name" class="form-control @error('emp_name') is-invalid @enderror"
                               id="employeeName" placeholder="Enter employee name"
                               value="{{ old('emp_name') }}" required>
                        @error('emp_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <!-- Employee Email -->
                    <div class="mb-3">
                        <label for="employeeEmail" class="form-label">Employee Email</label>
                        <input type="email" name="emp_email" class="form-control @error('emp_email') is-invalid @enderror"
                               id="employeeEmail" placeholder="Enter employee email"
                               value="{{ old('emp_email') }}" required>
                        @error('emp_email')
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

                     <!-- Employee Date of Birth -->
                    <div class="mb-3">
                        <label for="employeeDob" class="form-label">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror"
                            id="employeeDob" value="{{ old('date_of_birth') }}" required>
                        @error('date_of_birth')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
@endsection