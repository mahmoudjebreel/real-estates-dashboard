@extends('partials.admin-panel.layout')
@section('title', 'الحجوزات')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">الحجوزات</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">الحجوزات
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- @livewire('create-reservation') --}}

            </div>

            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">

                    <!-- list and filter start -->
                    <section id="basic-datatable">

                        @livewire('reservation')

                        @livewire('edit-reservation')

                    </section>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->
            </div>

        </div>
    </div>
    <!-- END: Content-->
@endsection
