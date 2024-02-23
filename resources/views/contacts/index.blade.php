@extends('layouts.admin_layout')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Contact Data</h1>
    <form action="{{ route('contact.download') }}" method="POST">
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
                @foreach ($contacts  as $contact)
                    @php 
                        $data = $contact->contact_data;
                    @endphp
                        <tr>
                            <td>{{ $data["full_name"] }}</td>
                            <td>{{ $data["email"] }} </td>
                            <td>{{ $data["interested_service"] }}</td>
                            <!-- Add more table cells for other job attributes -->
                            <td>
                               <a href="{{ route('contact.view', $contact) }}" class="btn btn-primary mb-3">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $contacts->links() }}  <!-- Pagination links -->
    </div>
@endsection