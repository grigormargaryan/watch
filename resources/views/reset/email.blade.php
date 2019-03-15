@extends('layouts.app')
@section('content')
    <div class="container" style="height: 350px">
        <div class="row" style="padding-top:5.5%">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="login_head">Please write your</div>
                    <div class="panel-body login_panel">
                        <div class="col-md-12">
                            @if(Session::has('message_danger'))
                                <div id="form-messages" class="alert alert-danger col-md-6 col-md-offset-4 email-send"" role="alert">
                                {{ Session::get('message_danger') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-12">
                        @if(Session::has('message_successfully'))
                            <div id="form-messages" class="alert alert-success col-md-6 col-md-offset-4 email-send"  role="alert">
                                {{ Session::get('message_successfully') }}
                            </div>
                        @endif
                    </div>
                    <form class="form-horizontal" role="form" method="POST" action="/send-email">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary login_button">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> Send

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>@endsection


