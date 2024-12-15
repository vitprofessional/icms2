@extends('includePage') 
@section('body')
    <div class="row   ">
        <div class="card card-body  border  ">
            <table class=" table table-striped table-hover text-center shadow-lg p-3 rounded" >
                <tbody class="table-info">

                    <tr>
                        <th type="hidden" name="singleId" value="{{$singleData->id}}">{{$singleData->id}}</th>
                        <th scope="col">Date</th>
                        <td>{{$singleData->date}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Source</th>
                        <td>{{$singleData->source}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Amount</th>
                        <td>{{$singleData->amount}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Type Of Transaction</th>
                        <td>{{$singleData->transaction}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection