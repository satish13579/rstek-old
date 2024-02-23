@extends('layouts.admin_layout')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Hiring Form Data</h1>
    <!-- <a href="" class="btn btn-primary mb-3">Download</a> -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
                @php 
                    $data = json_decode($hiring->form_data, true);
                @endphp
                <thead>
                    <tr>
                        <th>Form Field</th>
                        <th>User Input</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection