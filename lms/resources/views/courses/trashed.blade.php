@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">Trashed Courses</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->course_name }}</h5>
                        <p class="card-text text-muted mb-1">{{ $course->course_code }}</p>
                        <p class="card-text mb-3">{{ $course->description }}</p>
                        <a href="{{ route('courses.restore', $course->id) }}" class="btn btn-success btn-sm">Restore</a>
                        <a href="{{ route('courses.destroy', $course->id) }}" class="btn btn-danger btn-sm">Delete Forever</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
