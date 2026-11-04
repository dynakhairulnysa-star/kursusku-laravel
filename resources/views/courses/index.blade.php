@extends('layouts.app')

@section('title', 'Daftar Kursus')

@section('content')
<div class="container py-4 px-4"> <!-- Tambahan px-4 agar container agak geser ke tengah -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="h3 mb-1 text-white">Daftar Kursus</h1>
            <p class="text-secondary mb-0">Data diambil dari MySQL melalui Eloquent.</p>
        </div>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            + Tambah Kursus
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card custom-card shadow-lg">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-dark table-striped mb-0 align-middle">
                    <thead>
                        <tr>
                            <!-- Tambahan py-3 px-3 untuk memberi jarak pada header -->
                            <th class="py-3 px-3">Kode</th>
                            <th class="py-3 px-3">Nama</th>
                            <th class="py-3 px-3">Biaya</th>
                            <th class="py-3 px-3">Kuota</th>
                            <th class="py-3 px-3">Mulai</th>
                            <th class="py-3 px-3">Status</th>
                            <th class="py-3 px-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($courses as $course)
                            <tr>
                                <td class="py-3 px-3">{{ $course->code }}</td>
                                <td class="py-3 px-3">{{ $course->name }}</td>
                                <td class="py-3 px-3">Rp {{ number_format($course->fee, 0, ',', '.') }}</td>
                                <td class="py-3 px-3">{{ $course->quota }}</td>
                                <td class="py-3 px-3">{{ $course->start_date->format('d/m/Y') }}</td>
                                <td class="py-3 px-3">{{ ucfirst($course->status) }}</td>
                                <td class="py-3 px-3">
                                    <!-- gap-2 membuat jarak antar tombol lebih lega, justify-content-center membuat tombol ke tengah -->
                                    <div class="d-flex gap-2 flex-wrap justify-content-center">
                                        <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-outline-info">
                                            Detail
                                        </a>
                                        <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-outline-warning">
                                            Edit
                                        </a>
                                        <form method="POST" action="{{ route('courses.destroy', $course) }}" onsubmit="return confirm('Hapus kursus ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    Belum ada data kursus.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection