@extends('layouts.admin_layout')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Hiring Form Data</h1>
    <form action="{{ route('hiring.download') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary mb-3">Download</button>
    </form>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Interested</th>
                        <!-- Add more table headers for other job attributes -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hirings as $hiring)
                        @php 
                            $data = json_decode($hiring->form_data, true);
                        @endphp

                    <tr>                        
                        <td>{{ $data["full_name"] }}</td>
                        <td>{{ $data["email"] }}</td>
                        <td>{{ $data["testing_type"] }}</td>
                        <td>
                            <a href="{{ route('hiring.view', $hiring) }}" class="btn btn-primary mb-3">View</a>
                        </td>
                    </tr>
                    @endforeach
               </tbody>
            </table>
        </div>
        {{ $hirings->links() }} <!-- Pagination links -->
    </div>
@endsection