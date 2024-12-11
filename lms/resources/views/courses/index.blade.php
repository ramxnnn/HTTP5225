@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">All Courses</h1>
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
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('courses.trash', $course->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
