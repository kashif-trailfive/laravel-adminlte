@extends('adminlte.template')

@section('header')
@include('adminlte.header')
@endsection

@section('navbar')
@include('adminlte.navbar')
@endsection

@section('sidebar')
@include('adminlte.sidebar')
@endsection


@section('breadcrum')
@include('adminlte.breadcrum')
@endsection

@section('contant')

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-body">
                    <form action="{{ route('user.action.update',$user->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                                    id="name" placeholder="First name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    @if($errors->has('name'))
                                        <span
                                            class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ $user->email }}" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    @if($errors->has('email'))
                                        <span
                                            class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    @if($errors->has('password'))
                                        <span
                                            class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="password_confirmation" placeholder="Retype password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    @if($errors->has('password'))
                                        <span
                                            class="text-danger">{{ $errors->first('password_match') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-2">

                                <!-- /.col -->
                                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>
                                    Register</button>

                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-2">

                                <a href="{{ route('users.index') }}"
                                    class="btn btn-warning btn-block">
                                    <i class="fas fa-arrow-left"></i> Cancel
                                </a>

                            </div>
                        </div>
                </div>

                </form>

            </div>
        </div>
    </div>
    </div>


    </div>
</section>

@endsection

@section('footer')
@include('adminlte.footer')
@endsection