@extends('layouts.dashboard')


@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Roles</h5>
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
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="#" class=""></a>
                <!--end::Button-->
                <!--begin::Button-->
                <a href="{{ route('roles.create') }}"
                    class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Create New Roles
                </a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->

    @if ($message = Session::get('success'))
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class=" alert alert-success mb-8" role="alert">
                    <p>{{ $message }}</p>
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



                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Roles Management</h3>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <table class="table">
                        <tr>
                           <th>No</th>
                           <th>Name</th>
                           <th width="280px">Action</th>
                        </tr>
                          @foreach ($roles as $key => $role)
                          <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $role->name }}</td>
                              <td>
                                  <a class="btn btn-success" href="{{ route('roles.show',$role->id) }}">Show</a>
                                  @can('role-edit')
                                      <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                  @endcan
                                  @can('role-delete')
                                      {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                  @endcan
                              </td>
                          </tr>
                          @endforeach
                      </table>


                      {!! $roles->render() !!}

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
