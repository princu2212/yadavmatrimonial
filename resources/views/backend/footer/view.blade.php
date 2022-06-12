@extends('backend.main')
@section('title')
    Footer
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Footer</h4>

                            <form method="post" action="{{ route('footer.update', $footer->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input name="address" class="form-control" type="text"
                                            value="{{ $footer->address }}" id="address">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-2 col-form-label">Mobile Number</label>
                                    <div class="col-sm-10">
                                        <input name="phone" class="form-control" type="text"
                                            value="{{ $footer->phone }}" id="phone">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" class="form-control" type="email"
                                            value="{{ $footer->email }}" id="email">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="whatsapp" class="col-sm-2 col-form-label">WhatsApp</label>
                                    <div class="col-sm-10">
                                        <input name="whatsapp" class="form-control" type="text"
                                            value="{{ $footer->whatsapp }}" id="whatsapp">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input name="facebook" class="form-control" type="text"
                                            value="{{ $footer->facebook }}" id="facebook">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                                    <div class="col-sm-10">
                                        <input name="twitter" class="form-control" type="text"
                                            value="{{ $footer->twitter }}" id="twitter">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input name="instagram" class="form-control" type="text"
                                            value="{{ $footer->instagram }}" id="instagram">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Update Footer Page">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
