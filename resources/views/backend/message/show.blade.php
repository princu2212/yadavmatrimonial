@extends('backend.main')
@section('title')
    Show | Message
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">View Message</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $message->name }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $message->email }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Mobile Number</label>
                                        <input type="number" class="form-control" name="phone"
                                            value="{{ $message->phone }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject"
                                            value="{{ $message->subject }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Message </label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="message" disabled>
                                        {{ $message->message }}
                                    </textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <a href="{{ route('message.create') }}"
                                class="btn btn-primary waves-effect waves-light mt-2">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
