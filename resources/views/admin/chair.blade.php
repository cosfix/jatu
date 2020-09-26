@extends('layouts.app')
@section('content')

<div>
<h3>WELCOME TO LOAN CHAIR</h3>
</div>

<a href="{{url('/admin/uamuzi')}}" class="btn btn-default" > Formu ya Maamuzi</a>

<a href="{{url('/admin/memberview')}}" class="btn btn-success" > View Registered Member</a>




@endsection