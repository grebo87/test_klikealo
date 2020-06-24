@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Usuarios</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ base_url('users/create') }}">Nuevo Usuario</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
		<?php if (isset($_SESSION['message'])) : ?>
		    <div class="alert alert-{{$_SESSION['alert']}}">

		        <p><?= $_SESSION['message'] ?></p>
		    </div>
		<?php endif ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
				@include('users/table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
@push('scripts')
    @parent

    <script type="text/javascript">
		$(document).ready( function () {
		    $('#users-table').DataTable();
		} );
    </script>
@endpush



