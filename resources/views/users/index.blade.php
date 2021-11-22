@extends('layouts.dashboard')


@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Details-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Users</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">450 Total</span>
                        <form class="ml-5">
                            <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                                <input type="text" class="form-control" id="kt_subheader_search_form"
                                    placeholder="Search...">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <span class="svg-icon">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end::Search Form-->
                    <!--begin::Group Actions-->
                    <div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
                        <div class="text-dark-50 font-weight-bold">
                            <span id="kt_subheader_group_selected_rows">23</span>Selected:
                        </div>
                        <div class="d-flex ml-6">
                            <div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
                                <button type="button"
                                    class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle"
                                    data-toggle="dropdown">Update Status</button>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
                                    <ul class="navi navi-hover pt-3 pb-4">
                                        <li
                                            class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">
                                            Change status to:</li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" data-toggle="status-change" data-status="1">
                                                <span class="navi-text">
                                                    <span
                                                        class="label label-light-success label-inline font-weight-bold">Approved</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" data-toggle="status-change" data-status="2">
                                                <span class="navi-text">
                                                    <span
                                                        class="label label-light-danger label-inline font-weight-bold">Rejected</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" data-toggle="status-change" data-status="3">
                                                <span class="navi-text">
                                                    <span
                                                        class="label label-light-warning label-inline font-weight-bold">Pending</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" data-toggle="status-change" data-status="4">
                                                <span class="navi-text">
                                                    <span class="label label-light-info label-inline font-weight-bold">On
                                                        Hold</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-light-success font-weight-bolder btn-sm mr-2"
                                id="kt_subheader_group_actions_fetch" data-toggle="modal"
                                data-target="#kt_datatable_records_fetch_modal">Fetch Selected</button>
                            <button class="btn btn-light-danger font-weight-bolder btn-sm mr-2"
                                id="kt_subheader_group_actions_delete_all">Delete All</button>
                        </div>
                    </div>
                    <!--end::Group Actions-->
                </div>
                <!--end::Details-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Button-->
                    <a href="#" class=""></a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <a href="{{ route('users.create') }}"
                        class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Add User
                    </a>
                    <!--end::Button-->
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left"
                        data-original-title="Quick actions">
                        <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path
                                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path
                                            d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                            fill="#000000"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </a>
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                            <!--begin::Naviigation-->
                            <ul class="navi">
                                <li class="navi-header font-weight-bold py-5">
                                    <span class="font-size-lg">Add New:</span>
                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                        data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                </li>
                                <li class="navi-separator mb-3 opacity-70"></li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon2-shopping-cart-1"></i>
                                        </span>
                                        <span class="navi-text">Order</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="navi-icon flaticon2-calendar-8"></i>
                                        </span>
                                        <span class="navi-text">Members</span>
                                        <span class="navi-label">
                                            <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="navi-icon flaticon2-telegram-logo"></i>
                                        </span>
                                        <span class="navi-text">Project</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="navi-icon flaticon2-new-email"></i>
                                        </span>
                                        <span class="navi-text">Record</span>
                                        <span class="navi-label">
                                            <span class="label label-light-success label-rounded font-weight-bold">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-separator mt-3 opacity-70"></li>
                                <li class="navi-footer pt-5 pb-4">
                                    <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                    <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip"
                                        data-placement="right" title="" data-original-title="Click to learn more...">Learn
                                        more</a>
                                </li>
                            </ul>
                            <!--end::Naviigation-->
                        </div>
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->

        @if ($message = Session::get('success'))
            <div class="d-flex flex-column-fluid">
                <div class="container">
                    <div class=" alert alert-success mb-8 alert-dismissable fade show" role="alert">
                        {{ $message }}
                    </div>
                </div>
            </div>
        @endif


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom">

                    <!--begin::Card-->
                    <div class="card card-custom">



                        <!--begin::Header-->
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">User Management</h3>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>Role</th>
                                <th>Date Created</th>
                                <th width="280px">Action</th>
                                </tr>
                                @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>
                                        <strong>{{ $user->name }}</strong> <br>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $v)
                                                <label class="badge badge-success">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('users.show',$user->id) }}">Show</a>
                                        @can('role-edit')
                                            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                        @endcan
                                        @can('role-delete')
                                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </table>


                            {{  $data->links('layouts.pagination.paginate') }}

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->

                    <!--begin::Header-->
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">User Management
                                <span class="d-block text-muted pt-2 font-size-sm">User management made easy</span>
                            </h3>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                            id="kt_datatable" style="">
                            <table class="datatable-table" style="display: block;">
                                <thead class="datatable-head">
                                    <tr class="datatable-row" style="left: 0px;">
                                        <th class="datatable-cell datatable-toggle-detail">
                                            <span></span>
                                        </th>
                                        <th data-field="RecordID"
                                            class="datatable-cell-left datatable-cell datatable-cell-sort datatable-cell-sorted"
                                            data-sort="asc">
                                            <span style="width: 40px;">#
                                                <i class="flaticon2-arrow-up"></i>
                                            </span>
                                        </th>
                                        <th data-field="OrderID" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 250px;">Users</span>
                                        </th>
                                        <th data-field="ShipDate" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 108px;">Role</span>
                                        </th>
                                        <th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 108px;">Date Created</span>
                                        </th>
                                        <th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 108px;">Date Updated</span>
                                        </th>
                                        <th data-field="Status" class="datatable-cell datatable-cell-sort" style="display: none;">
                                            <span style="width: 108px;">Status</span>
                                        </th>
                                        <th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 130px;">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                @foreach ($data as $key => $user)
                                    <tbody class="datatable-body" style="">
                                        <tr data-row="0" class="datatable-row" style="left: 0px;">

                                            <td class="datatable-cell-sorted datatable-cell-left datatable-cell"
                                                data-field="RecordID" ><span style="width: 40px;"><span
                                                        class="font-weight-bolder">{{ ++$i }}</span></span></td>
                                            <td data-field="OrderID" class="datatable-cell"><span
                                                    style="width: 250px;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                                                            <img class="" src="assets/media/users/100_13.jpg" alt="photo">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-dark-75 font-weight-bolder font-size-lg mb-0">
                                                                {{ $user->name }}
                                                            </div>
                                                            <a href="#" class="text-muted font-weight-bold text-hover-primary">
                                                                {{ $user->email }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </span></td>
                                            <td data-field="Country" class="datatable-cell">
                                                <span style="width: 108px;">
                                                    <div class="font-weight-bolder font-size-lg mb-0">
                                                        @if (!empty($user->getRoleNames()))
                                                            @foreach ($user->getRoleNames() as $v)
                                                                <label class="badge badge-success">{{ $v }}</label>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </span>
                                            </td>
                                            <td data-field="CompanyName" class="datatable-cell">
                                                <span style="width: 108px;">
                                                    <div class="font-weight-bold text-muted">
                                                        {{$user->created_at}}
                                                    </div>
                                                </span>
                                            </td>
                                            <td data-field="CompanyName" class="datatable-cell">
                                                <span style="width: 108px;">
                                                    <div class="font-weight-bold text-muted">
                                                        {{$user->updated_at}}
                                                    </div>
                                                </span>
                                            </td>

                                            <td data-field="Actions" data-autohide-disabled="false" class="datatable-cell">
                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <span style="overflow: visible; position: relative; width: 130px;">
                                                        <a href="{{ route('users.show', $user->id) }}" class="btn  btn-default btn-text-primary btn-hover-info btn-icon" title="Show details">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('users.edit', $user->id) }}" class="btn  btn-default btn-text-primary btn-hover-primary btn-icon" title="Edit details">
                                                            <i class="far fa-edit"></i>
                                                        </a>

                                                    </span>
                                                </form>
                                                <a href="#" class="btn btn-default btn-text-primary btn-hover-danger btn-icon" data-toggle="modal" data-target="#ModalDelete{{ $user->id }}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>

                                            </td>
                                            <!--Modals-->
                                            @include('users.modals.delete-modal')
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>

                           {{  $data->links('layouts.pagination.paginate') }}
                        </div>
                        <!--end: Datatable-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>



@endsection
