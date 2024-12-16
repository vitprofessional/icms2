@extends('includePage') 
@section('body')
    <div class="row   ">
        <div class="card card-body  border  ">
            <table class=" table table-striped table-hover text-center shadow-lg p-3 rounded" >
                <thead class="table-info">
                    <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Source</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Type Of Transaction</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @if(!empty($cashManageData) && count($cashManageData)>0)
                    @foreach($cashManageData    as $d)
                    <tr>
                        <td>{{$d    ->date}}</td>
                        <td>{{$d    ->source}}</td>
                        <td>{{$d    ->amount}}</td>
                        <td>{{$d   ->transaction}}</td>
                        <td>
                            <a href="{{route('singleView',['id'=>$d->id])}}"><i class="fa-solid fa-eye mx-2" style="color:rgb(35 170 211);"></i></a>
                            <a href=""><i class="fa-solid fa-pen-to-square mx-2" style="color: #4125b1;"></i></a>
                            <a href=""><i class="fa-solid fa-trash mx-2" style="color: #c10b26;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5"> Do not entry any data</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection