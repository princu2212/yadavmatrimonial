@extends('backend.main')
@section('title')
    Groom | Bride List
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Groom | Bride List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Groom | Bride List</li>
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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Date of Birth</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($matrimonial as $item)
                                        <tr>
                                            <td class="text-center"><img
                                                    src="{{ !empty($item->image) ? url('upload/matrimonial/' . $item->image) : url('upload/no_image.jpg') }}"
                                                    class="rounded" style="width: 40px; height:30px;"></td>
                                            <td>{{ $item->name }}</td>
                                            <td>{!! $item->date_of_birth == ''
    ? $item->age
    : \Carbon\Carbon::parse($item->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y') !!} Year</td>
                                            <td>{{ $item->gender }}</td>
                                            <td>{!! $item->date_of_birth == '' ? '' : \Carbon\Carbon::parse($item->date_of_birth)->format('d-m-Y') !!}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>
                                                <div class="dropdown text-center">
                                                    <a class="dropdown-button" id="dropdown-menu-{{ $item->id }}"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="dropdown-menu-{{ $item->id }}">
                                                        <a class="dropdown-item"
                                                            href="{{ route('matrimonial.edit', $item->id) }}">
                                                            <i class="fa fa-edit"></i>
                                                            {{ trans('Edit') }}
                                                        </a>
                                                        <form id="delete-{{ $item->id }}"
                                                            action="{{ route('matrimonial.destroy', $item->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                        <a class="dropdown-item" href="#"
                                                            onclick="if(confirm('{{ trans('Are you sure to delete?') }}')) document.getElementById('delete-{{ $item->id }}').submit()">
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
@endsection
