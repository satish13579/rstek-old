@extends('layouts.admin_layout')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Job</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Do Report</a> -->
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 margin-tb text-center">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('jobs.update', ['job' => $job->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="published_at">Published On:</label>
                <input type="date" name="published_at" class="form-control" required value="{{ $job->published_at ? \Carbon\Carbon::parse($job->published_at)->format('Y-m-d') : '' }}">
                @error('published_at')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="vacancy">Vacancy:</label>
                <input type="number" name="vacancy" class="form-control" required value="{{ $job->vacancy }}">
                @error('vacancy')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="job_tenure">Job Tenure:</label>
                <input type="text" name="job_tenure" class="form-control" required value="{{ $job->job_tenure }}">
                @error('job_tenure')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="experience">Experience:</label>
                <input type="text" name="experience" class="form-control" required value="{{ $job->experience }}">
                @error('experience')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="location">Job Location:</label>
                <input type="text" name="location" class="form-control" required value="{{ $job->location }}">
                @error('location')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="domain">Domain:</label>
                <input type="text" name="domain" class="form-control" required value="{{ $job->domain }}">
                @error('domain')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="mandatory_skills">Mandatory Skills (JSON):</label>
                <textarea name="mandatory_skills" class="form-control" rows="3" required>{{ $job->mandatory_skills }}</textarea>
                @error('mandatory_skills')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="skills">Skills:</label>
                <textarea name="skills" class="form-control" rows="3" required>{{ $job->skills }}</textarea>
                @error('skills')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="roles_responsibilities">Roles & Responsibilities:</label>
                <textarea name="roles_responsibilities" class="form-control" rows="3" required>{{ $job->roles_responsibilities }}</textarea>
                @error('roles_responsibilities')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="key_skills">Key Skills:</label>
                <textarea name="key_skills" class="form-control" rows="3" required>{{ $job->key_skills }}</textarea>
                @error('key_skills')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="job_type">Job Type:</label>
                <select name="job_type" class="form-control" required>
                    <option value="remote" {{ $job->job_type == 'remote' ? 'selected' : '' }}>Remote</option>
                    <option value="office" {{ $job->job_type == 'office' ? 'selected' : '' }}>Office</option>
                    <option value="hybrid" {{ $job->job_type == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                </select>
                @error('job_type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="is_published">Published:</label>
                <input type="checkbox" name="is_published" value="1" {{ $job->is_published ? 'checked' : '' }}>
            </div>

            <button type="submit" class="btn btn-primary">Update Job</button>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
