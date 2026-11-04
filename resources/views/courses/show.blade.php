@extends('layouts.app')

@section('title', 'Detail Kursus')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Card Utama dengan Efek Kaca -->
            <div class="card custom-card shadow-lg border-0">
                <div class="card-body p-4 p-md-5">
                    
                    <!-- Header Card -->
                    <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom border-secondary">
                        <div>
                            <h2 class="h3 text-white fw-bold mb-2">Detail Kursus</h2>
                            <span class="badge bg-info text-dark fs-6 px-3 py-2 shadow-sm">{{ $course->code }}</span>
                        </div>
                        <div class="d-flex gap-3">
                            <a href="{{ route('courses.index') }}" class="btn btn-outline-light px-4">Kembali</a>
                            <!-- Tombol Edit dengan efek Glow (warna senada) -->
                            <a href="{{ route('courses.edit', $course) }}" class="btn btn-outline-info fw-bold px-4 btn-glow-outline">Edit</a>
                        </div>
                    </div>

                    <!-- List Informasi -->
                    <dl class="row mb-0">
                        <dt class="col-sm-4 text-secondary fw-semibold py-3 border-bottom border-dark">Nama Kursus</dt>
                        <dd class="col-sm-8 text-white fw-medium fs-5 py-3 border-bottom border-dark">{{ $course->name }}</dd>

                        <dt class="col-sm-4 text-secondary fw-semibold py-3 border-bottom border-dark">Deskripsi</dt>
                        <dd class="col-sm-8 text-light py-3 border-bottom border-dark" style="font-size: 1rem; line-height: 1.6;">
                            {{ $course->description ?: '- Tidak ada deskripsi -' }}
                        </dd>

                        <dt class="col-sm-4 text-secondary fw-semibold py-3 border-bottom border-dark">Biaya</dt>
                        <!-- Warna Biru Neon (Bukan Hijau) -->
                        <dd class="col-sm-8 fw-bold fs-3 py-3 border-bottom border-dark" style="color: #60a5fa; text-shadow: 0 0 10px rgba(96, 165, 250, 0.4);">
                            Rp {{ number_format($course->fee, 0, ',', '.') }}
                        </dd>

                        <dt class="col-sm-4 text-secondary fw-semibold py-3 border-bottom border-dark">Kuota</dt>
                        <dd class="col-sm-8 text-white fw-medium fs-5 py-3 border-bottom border-dark">{{ $course->quota }} peserta</dd>

                        <dt class="col-sm-4 text-secondary fw-semibold py-3 border-bottom border-dark">Tanggal Mulai</dt>
                        <dd class="col-sm-8 text-white fw-medium fs-5 py-3 border-bottom border-dark">{{ $course->start_date?->format('d F Y') }}</dd>

                        <dt class="col-sm-4 text-secondary fw-semibold py-3">Status</dt>
                        <dd class="col-sm-8 py-3">
                            <!-- Badge Status Warna Neon/Merah -->
                            @if($course->status == 'open')
                                <span class="badge-available px-4 py-2 fs-6">Open</span>
                            @elseif($course->status == 'draft')
                                <span class="badge bg-secondary px-4 py-2 fs-6">Draft</span>
                            @else
                                <span class="badge-full px-4 py-2 fs-6">Closed</span>
                            @endif
                        </dd>
                    </dl>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection