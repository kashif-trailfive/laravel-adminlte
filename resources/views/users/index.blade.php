@extends('adminlte.template')

@section('header')
@include('adminlte.header')
<link rel="stylesheet"
    href="{{ asset('adminlte/plugins/bootstrap-table/bootstrap-table.min.css') }}">
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

<section class="content">
    <div class="row">

        <div class="col-md-2">
            <h3 class="box-title">

                <a href="{{ route('user.create') }}" class="btn btn-block btn-outline-success">
                    <i class="fas fa-plus"></i> New User
                </a>

            </h3>
        </div>

        <div class="col-md-12">
            <div class="box">

                <div class="box-body">
                    <div class="card">

                        <div class="card-body table-responsive p-2">
                            <table class="table table-striped table-valign-middle">

                                <thead>
                                    <tr>
                                        <th>{{ __('users.users_firstname') }}</th>
                                        <th>{{ __('users.users_email') }}</th>
                                        <th>{{ __('users.users_action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if($users->count() == 0)
                                        <tr>
                                            <td colspan="5">No users to display.</td>
                                        </tr>
                                    @endif

                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>

                                                <a class="red delete_user" href="javascript:void(0);"
                                                    data-id="{{ $user->id }}">
                                                    <span style="font-size: 1.5em; color: Tomato;"><i
                                                            class="fa fa-trash"></i></span>

                                                </a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a class="red delete-item"
                                                    href="{{ route('user.edit',$user->id) }}">
                                                    <span style="font-size: 1.5em; color: Dodgerblue;"><i
                                                            class="fa fa-edit"></i></span>
                                                </a>

                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
@include('adminlte.footer')
<script src="{{ asset('adminlte/plugins/bootstrap-table/bootstrap-table.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    $('.delete_user').click(function () {
        if (confirm('Are you sure to delte this record?')) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                url: "user/" + id,
                type: 'DELETE',
                data: {
                    _token: token,
                    id: id
                },
                success: function (response) {

                    // $("#success").html(response.message)
                    location.reload();
                    Swal.fire(
                        'Remind!',
                        'User deleted successfully!',
                        'success'
                    )
                }
            });
            return false;
        };
    });
</script>
@endsection