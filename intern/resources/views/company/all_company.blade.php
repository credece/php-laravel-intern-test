@extends('index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="p-5">Company Name</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{route('add.company')}}" class="btn btn-primary mb-2">Add Company</a>
                <div class="table-responsive">
                    <table class="table table-sm align-middle table-bordered border-primary text-center table-striped text-dark">
                      <thead>
                        <tr>
                            <th scope="col">Company Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($show_com as $show_company)
                            <tr>
                                <td style="vertical-align: middle;">{{$show_company->com_name}}</td>
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