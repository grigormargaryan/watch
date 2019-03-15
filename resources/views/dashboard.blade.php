@extends('layouts.index')
@section('dashboard')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-3 col-xs-3">
                    @include('admin.include.admin_left_menu')
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">Welcome</div>

                        <div class="panel-body">
                            Your Application's Landing Page.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection