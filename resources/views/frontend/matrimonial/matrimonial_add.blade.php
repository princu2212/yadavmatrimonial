@extends('frontend.main')
@section('title')
    Add Bride | Groom
@endsection

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('index', app()->getLocale()) }}">@lang('matrimonial.home')</a></li>
                    <li>@lang('matrimonial.matrimonial')</li>
                </ol>
                <h2>@lang('matrimonial.add')</h2>

            </div>

        </section><!-- End Breadcrumbs -->
        <section id="add_matrimonial" class="add_matrimonial">
            <div class="container" data-aos="fade-up">
                <div class="">
                    <form action="{{ route('matrimonial.store', app()->getLocale()) }}" method="POST"
                        enctype="multipart/form-data" class="matrimonial-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 form-group">
                                <label for="name" class="form-label">@lang('matrimonial.Name') <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Full Name"
                                    required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="age" class="form-label">@lang('matrimonial.age') <span
                                        class="text-danger">*</span></label>
                                <input type="number" name="age" class="form-control" placeholder="Enter Age" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="gender" class="form-label">@lang('matrimonial.Gender') <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="gender" required>
                                    <option selected disabled>Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="height" class="form-label">@lang('matrimonial.Height') <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="height" required>
                                    <option selected disabled>Choose...</option>
                                    <option value="4ft.5inch">4ft.5inch</option>
                                    <option value="4ft.6inch">4ft.6inch</option>
                                    <option value="4ft.7inch">4ft.7inch</option>
                                    <option value="4ft.8inch">4ft.8inch</option>
                                    <option value="4ft.9inch">4ft.9inch</option>
                                    <option value="5ft.0inch">5ft.0inch</option>
                                    <option value="5ft.1inch">5ft.1inch</option>
                                    <option value="5ft.2inch">5ft.2inch</option>
                                    <option value="5ft.3inch">5ft.3inch</option>
                                    <option value="5ft.4inch">5ft.4inch</option>
                                    <option value="5ft.5inch">5ft.5inch</option>
                                    <option value="5ft.6inch">5ft.6inch</option>
                                    <option value="5ft.7inch">5ft.7inch</option>
                                    <option value="5ft.8inch">5ft.8inch</option>
                                    <option value="5ft.9inch">5ft.9inch</option>
                                    <option value="6ft.0inch">6ft.0inch</option>
                                    <option value="6ft.1inch">6ft.1inch</option>
                                    <option value="6ft.2inch">6ft.2inch</option>
                                    <option value="6ft.3inch">6ft.3inch</option>
                                    <option value="6ft.4inch">6ft.4inch</option>
                                    <option value="6ft.5inch">6ft.5inch</option>
                                </select>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="dob" class="form-label">@lang('matrimonial.Date of Birth')</label>
                                <input type="date" class="form-control" name="dob">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="education" class="form-label">@lang('matrimonial.Education')</label>
                                <input type="text" class="form-control" name="education" placeholder="Education">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="work" class="form-label">@lang('matrimonial.Job Details') <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="work" placeholder="Work" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="marital_status" class="form-label">@lang('matrimonial.Marital Status') <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="marital_status" required>
                                    <option selected disabled>Choose...</option>
                                    <option value="unmarried">Unmarried</option>
                                    <option value="divorced">Divorced</option>
                                </select>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="phone" class="form-label">@lang('matrimonial.Mobile Number') <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="phone" placeholder="Mobile Number"
                                    required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="gotra" class="form-label">@lang('matrimonial.Gotra')</label>
                                <input type="text" class="form-control" name="gotra" placeholder="Gotra">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="rashi" class="form-label">@lang('matrimonial.Rashi')</label>
                                <input type="text" class="form-control" name="rashi" placeholder="Enter Rashi">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="village" class="form-label">@lang('matrimonial.Village/Town') <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="village"
                                    placeholder="Enter Village/City" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="district" class="form-label">@lang('matrimonial.District') <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="district" placeholder="Enter District"
                                    required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="address" class="form-label">@lang('matrimonial.Address') <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="address"
                                    placeholder="Enter Permanent Address" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="fathers_name" class="form-label">@lang('matrimonial.Fathers Name') <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="fathers_name"
                                    placeholder="Enter Father's Name" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="mothers_name" class="form-label">@lang('matrimonial.Mothers Name') <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="mothers_name"
                                    placeholder="Enter Mother's Name" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="total_member" class="form-label">@lang('matrimonial.Total Members') <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="total_member"
                                    placeholder="Enter Total Member" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="no_of_brothers" class="form-label">@lang('matrimonial.No. of Brothers') <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="no_of_brothers"
                                    placeholder="Enter No. of Brothers" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="no_of_sisters" class="form-label">@lang('matrimonial.No. of Sisters') <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="no_of_sisters"
                                    placeholder="Enter No. of Sisters" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="col-md-3 form-group">
                                <img id="showImage" class="rounded avatar-lg w-100 h-100" src=""
                                    alt="Card image cap">
                            </div>
                        </div>
                        <div class="text-center"><button type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
