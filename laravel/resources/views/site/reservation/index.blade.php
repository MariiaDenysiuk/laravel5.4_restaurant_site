@extends('site.main')
@section('content')
    <?php
    echo Form::open(array('url' => 'foo/bar') );
    echo Form::text('username','Username') ;
    echo Form::text('email', 'example@gmail.com') ;
    echo Form::text('phone', 'phone') ;
    echo Form::date('date', \Carbon\Carbon::now());
    echo Form::date('time', \Carbon\Carbon::now());
    echo Form::number('people', 'value');

    echo Form::submit('Click Me!') ;
    echo Form::close() ;
    ?>
@endsection