@extends('includePage') 
@section('body')
    <div class="row col-md-6 mx-auto">
        <div class="card card-body  border  ">
            
        <div class="mb-3 text-center">
         <u class="h4">Calculas View</u>
        </div>
            <table class=" table table-striped table-hover hadow-lg p-3 rounded" >
                <tbody class="">

                    <tr>
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