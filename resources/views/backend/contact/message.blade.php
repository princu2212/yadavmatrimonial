@extends('backend.main')
@section('title')
    Messages
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Message List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Message List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>SNo.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php($i = 1)
                                    @foreach ($contact as $message)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->phone }}</td>
                                            <td>{{ $message->subject }}</td>
                                            <td>{{ $message->message }}</td>
                                            <td>{{ Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</td>
                                            <td>
                                                <div class="dropdown text-center">
                                                    <a class="dropdown-button" id="dropdown-menu-{{ $message->id }}"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="dropdown-menu-{{ $message->id }}">
                                                        <a class="dropdown-item"
                                                            href="{{ route('contact.show', $message->id) }}">
                                                            <i class="fa fa-eye"></i>
                                                            {{ trans('View') }}
                                                        </a>
                                                        <form id="delete-{{ $message->id }}"
                                                            action="{{ route('contact.destroy', $message->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                        <a class="dropdown-item" href="#"
                                                            onclick="if(confirm('{{ trans('Are you sure to delete?') }}')) document.getElementById('delete-{{ $message->id }}').submit()">
                                                            <i class="fa fa-trash"></i>
                                                            {{ trans('Delete') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Upcube.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
