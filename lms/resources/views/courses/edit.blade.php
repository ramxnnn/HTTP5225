@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <h2 class="display-2">
                Edit Course Profile
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('courses.update', $course->id) }}" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="course_name" class="form-label">Course Name</label>
                    <input type="text" class="form-control" id="course_name" name="course_name" value="{{ $course->course_name }}">
                </div>
                <div class="mb-3">
                    <label for="course_code" class="form-label">Course Code</label>
                    <input type="text" class="form-control" id="course_code" name="course_code" value="{{ $course->course_code }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $course->description }}</textarea>
                </div>     
                <button type="submit" class="btn btn-primary">Update Course</button>
            </form>
        </div>
    </div>
@endsection
