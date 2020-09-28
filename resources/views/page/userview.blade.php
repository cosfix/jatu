@extends('layouts.app')

@section('content')


<div>
<table class="table table-striped custab">
    
    
        <tr>
            <th>Jina Kamili</th>
            <th>Anwan</th>
            <th>Namba ya Simu</th>
            <th>Kazi Unayofanya</th>
            <th>Eneo la KAzi</th>
            <th>Mtaa</th>
            <th>Hali ya ndoa</th>
            <th>dhmana</th>
            <th>Tarehe</th>
           
            <th>Action</th>
        </tr>
        @if($loans->count() >=1)
@foreach($loans as $ln)
            <tr>
                <td>{{ $ln->name }}</td>
                <td>{{ $ln->address }}</td>
                <td>{{ $ln->phone}}</td>
                <td>{{ $ln->work}}</td>
                <td>{{ $ln->location}}</td>
                <td>{{ $ln->street}}</td>
                <td>{{ $ln->status}}</td>
                <td>{{ $ln->bond}}</td>
                <td>{{ $ln->created_at}}</td>
                
               
                <td>{{ $ln->complete? 'Completed' : 'Inafanyiwa Kazi' }}</td>
                


            </tr>
@endforeach
@endif
</table>
</div>

 
@endsection