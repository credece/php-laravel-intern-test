@extends('index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="p-5">Employee Name</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{route('add.employee')}}" class="btn btn-primary mb-2">Add Employee</a>
                <div class="table-responsive">
                    <table class="table table-sm align-middle table-bordered border-primary text-center table-striped text-dark">
                      <thead>
                        <tr>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Employee Email</th>
                            <th scope="col">Company</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($show_empl as $employee)
                            <tr>
                                <td style="vertical-align: middle;">{{$employee->emp_name}}</td>
                                <td style="vertical-align: middle;">{{$employee->emp_email}}</td>
                                <td style="vertical-align: middle;">{{$employee->company->com_name}}</td>
                                {{-- <td style="vertical-align: middle;">{{$employee->emp_name}}</td> --}}
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection