@extends('layouts.app')

@section('content')


<div>
<table class="table table-striped custab">
    
    
        <tr>
        <th>Namba ya Uanachama</th>
            <th>Dhamana</th>
            <th>Aina ya Biashara</th>
            <th>Eneo la Biashara</th>
            <th>mapato kwa Siku</th>
            <th>Mapato kwa Mwezi</th>
            <th>Kiasi cha Mkopo</th>
            <th>Lengo la Mkopo</th>
            <th>Action</th>
        </tr>
        @if($loans->count() >=1)
@foreach($loans as $ln)
            <tr>
            <td>{{ $ln->member_id}}</td>
                <td>{{ $ln->bond}}</td>
                <td>{{ $ln->business}}</td>
                <td>{{ $ln->place}}</td>
                <td>{{ $ln->amount}}</td>
                <td>{{ $ln->reason}}</td>
                <td>{{ $ln->month_payment}}</td>
                <td>{{ $ln->payment_phase}}</td>
                <td><a href="" class="btn btn-success btn-xs">Complete</a></td>
            </tr>
@endforeach
@endif
</table>
</div>

 
@endsection