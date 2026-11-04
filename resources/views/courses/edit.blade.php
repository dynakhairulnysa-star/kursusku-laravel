@extends('layouts.app')

@section('title', 'Edit Kursus')

@section('content')
<div class="container py-4" style="max-width: 760px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0 text-white">Edit Kursus</h1>
        <a href="{{ route('courses.show', $course) }}" class="btn btn-outline-secondary">Batal</a>
    </div>

    <form method="POST" action="{{ route('courses.update', $course) }}" class="card custom-card p-4 shadow-lg">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label text-white" for="code">Kode Kursus</label>
            <input type="text" id="code" name="code" 
                   value="{{ old('code', $course->code) }}" 
                   class="form-control @error('code') is-invalid @enderror">
            @error('code') 
                <div class="invalid-feedback">{{ $message }}</div> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label text-white" for="name">Nama Kursus</label>
            <input type="text" id="name" name="name" 
                   value="{{ old('name', $course->name) }}" 
                   class="form-control @error('name') is-invalid @enderror">
            @error('name') 
                <div class="invalid-feedback">{{ $message }}</div> 
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label text-white" for="description">Deskripsi</label>
            <textarea id="description" name="description" rows="4" 
                      class="form-control @error('description') is-invalid @enderror">{{ old('description', $course->description) }}</textarea>
            @error('description') 
                <div class="invalid-feedback">{{ $message }}</div> 
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label text-white" for="fee">Biaya</label>
                <input type="number" id="fee" name="fee" 
                       value="{{ old('fee', $course->fee) }}" 
                       class="form-control @error('fee') is-invalid @enderror">
                @error('fee') 
                    <div class="invalid-feedback">{{ $message }}</div> 
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label text-white" for="quota">Kuota</label>
                <input type="number" id="quota" name="quota" 
                       value="{{ old('quota', $course->quota) }}" 
                       class="form-control @error('quota') is-invalid @enderror">
                @error('quota') 
                    <div class="invalid-feedback">{{ $message }}</div> 
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label text-white" for="start_date">Tanggal Mulai</label>
                <input type="date" id="start_date" name="start_date" 
                       value="{{ old('start_date', $course->start_date?->format('Y-m-d')) }}" 
                       class="form-control @error('start_date') is-invalid @enderror">
                @error('start_date') 
                    <div class="invalid-feedback">{{ $message }}</div> 
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label text-white" for="status">Status</label>
                <select id="status" name="status" class="form-select @error('status') is-invalid @enderror">
                    @foreach(['draft' => 'Draft', 'open' => 'Open', 'closed' => 'Closed'] as $value => $label)
                        <option value="{{ $value }}" @selected(old('status', $course->status) === $value)>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
                @error('status') 
                    <div class="invalid-feedback">{{ $message }}</div> 
                @enderror
            </div>
        </div>

        <div class="d-flex gap-2 mt-3">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('courses.show', $course) }}" class="btn btn-outline-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection