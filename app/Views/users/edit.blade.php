@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuario
        </h1>
    </section>
    <div class="content">
        <?php if (! empty($errors)) : ?>
    <div class="alert alert-danger">
    <?php foreach ($errors as $field => $error) : ?>
        <p><?= $error ?></p>
    <?php endforeach ?>
    </div>
<?php endif ?>

        <div class="box box-primary">
            <div class="box-body">
                <form action="{{ base_url('users/update') }}" id="userForm" method="POST" >
                    @include('users/fields-edit')
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @parent

    <script type="text/javascript">
        let validator = $("#userForm").validate({
            rules: {
                phone: "number"
            }
        });
    </script>
@endpush
