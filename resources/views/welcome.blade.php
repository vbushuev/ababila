@extends('master')
@section('title', 'Welcome')
@section('sidebar')
    @include('menubar')
@endsection
@section('content')
    <div class="content">
        <div class="title">Ababila</div>
        <div class="quote">B2B stock market</div>
        <div class="block"><button class="a big" href="/auth/register">Start</button>
    </div>
    <script language="JavaScript">
        $(document).ready(function() {
            $('button.a').click(function(e){
                e.preventDefault();
                var href=$(this).attr('href');
                window.location.href = href;
            });
        });
    </script>
@endsection
