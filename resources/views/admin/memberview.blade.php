@extends('layouts.app')

@section('content')


<div>
<table class="table table-striped custab">
    
    
        <tr>
            <th>Namba ya Kitabu</th>
            <th>Akiba</th>
            <th>Dhamana</th>
            <th>Jina La Mrithi</th>
            <th>Namba ya Simu ya Mrithi</th>
            <th>Namba ya Uanachama</th>
            <th>Aina ya Biashara</th>
            <th>Eneo la Biashara</th>
            <th>mapato kwa Siku</th>
            <th>Mapato kwa Mwezi</th>
            <th>Kiasi cha Mkopo</th>
            <th>Lengo la Mkopo</th>
            <th>Muda wa Kulipa</th>
            
            <th>Awamu za kulipa</th>
        </tr>
        @if($loans->count() >=1)
@foreach($loans as $ln)
            <tr>
                <td>{{ $ln->id }}</td>
                <td>{{ $ln->saving }}</td>
                <td>{{ $ln->bond}}</td>
                <td>{{ $ln->successor_name}}</td>
                <td>{{ $ln->successor_phone}}</td>
                <td>{{ $ln->member_id}}</td>
                <td>{{ $ln->business}}</td>
                <td>{{ $ln->place}}</td>
                <td>{{ $ln->day_income}}</td>
                <td>{{ $ln->month_income}}</td>
                <td>{{ $ln->amount}}</td>
                <td>{{ $ln->reason}}</td>
                <td>{{ $ln->month_payment}}</td>

                <td>{{ $ln->payment_phase}}</td>
                


            </tr>
@endforeach
@endif
</table>
</div>

 
@endsection