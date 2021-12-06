@extends('layout.sidebar')
@section('main-content')

<div class="col-md-12 mb-4">
    <div class="card text-left">

        <div class="card-body">

            <div class="col-md-12" style="margin-bottom:20px;">
                <a type="button" href="" class="btn btn-primary btn-md pull-right">Add Patient</a>

            </div>
            <div class="table-responsive">
                <table id="multicolumn_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>First Name</th>
                            <th>Last Type</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($patient_data) > 0)
                        @foreach($patient_data as $patient)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> </td>
                            <td> </td>

                        </tr>
                        @endforeach
                        @endif
                    </tbody>

                </table>

            </div>

        </div>
    </div>
</div>
@endsection
@section('page-js')
@endsection