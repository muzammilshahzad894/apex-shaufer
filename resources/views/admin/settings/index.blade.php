@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('partials.messages')
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Settings</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                              
                              
                                <div class="mb-3 col-md-6">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0">Admin Email <span class="text-danger">*</span></label>
                                        <i class="fa fa-info-circle ms-1" data-toggle="tooltip" data-placement="top" title="All Emails also send to given admin email."></i>
                                    </div>
                                    <input type="text" name="admin_email" class="form-control" placeholder="" value="{{ old('admin_email', setting('admin_email')) }}" required>
                                    @error('admin_email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection