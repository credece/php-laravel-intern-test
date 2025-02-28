@extends('index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="p-5">Departments</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{route('add.dept')}}" class="btn btn-primary mb-2">Add Department</a>
                <div class="table-responsive">
                    <table class="table table-sm align-middle table-bordered border-primary text-center table-striped text-dark">
                      <thead>
                        <tr>
                            <th scope="col">Department Name</th>
                            <th scope="col">Company</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($show_dept as $department)
                            <tr>
                                <td style="vertical-align: middle;">{{$department->dept_name}}</td>
                                <td style="vertical-align: middle;">{{$department->company->com_name}}</td>
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