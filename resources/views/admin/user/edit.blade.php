@extends('layouts.admin.app')

@section('content')
    {{-- start main content --}}
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Pelanggan</a></li>
                <li class="breadcrumb-item active" aria-current="page">edit Pelanggan</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">tambah Pelanggan</h1>
                <p class="mb-0">Form untuk menambahkan data pelanggan baru.</p>
            </div>
            <div>
                <a href="" class="btn btn-primary"><i class="far fa-question-circle me-1"></i> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <div class="col-lg-4 col-sm-6">
                                <!--  Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">First name</label>
                                    <input type="text" id="name"name="name" class="form-control" required
                                        value="{{ $datauser->name }}">
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" name="email" class="form-control" required
                                        value="{{ $datauser->email }}>
                                    </div>

                            <div class="col-lg-4
                                        col-sm-6">
                                    <!-- password -->
                                    <div class="mb-3">
                                        <label for="password" class="form-label">password</label>
                                        <input type="password" id="password" name="password" class="password" required
                                            value="{{ $datauser->password }}">
                                    </div>

                                    <!--confirmation password -->
                                    <div class="mb-3">
                                        <label for="confirmationpassword" class="form-label">Confirmation Password</label>
                                        <input type="password" id="confirmation password" name="confirmation password"
                                            class="password" required value="{{ $datauser->confirmation_password }}">
                                    </div>

                                    <div class="col-lg-4 col-sm-12">




                                        <!-- Buttons -->
                                        <div class="">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{ route('user.index') }}"
                                                class="btn btn-outline-secondary ms-2">Batal</a>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- end main content --}}
@endsection
