@extends('layouts.admin_layout')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Job Lists</h1>
    <a href="{{ route('jobs.create') }}" class="btn btn-primary mb-3">Create New Job</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Published On</th>
                        <th>Vacancy</th>
                        <th>Job Tenure</th>
                        <!-- Add more table headers for other job attributes -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                        <tr>
                            <td>{{ $job->published_on }}</td>
                            <td>{{ $job->vacancy }}</td>
                            <td>{{ $job->job_tenure }}</td>
                            <!-- Add more table cells for other job attributes -->
                            <td>
                                <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $jobs->links() }} <!-- Pagination links -->
    </div>
@endsection