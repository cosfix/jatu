@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            





<a href="{{url('/page/maendeleo')}}" class="btn btn-success pull-right btn-sm">Mkopo Wa Maendeleo</a>
<br>
<a href="{{ url('page/dharura') }}"  class="btn btn-success pull-right btn-sm">Mkopo wa Dharura</a>
<hr>

<a href="{{ url('page/userview') }}"  class="btn btn-primary pull-right btn-sm">Angalia Data</a>


            </div>
        </div>
    </div>
</div>
@endsection
