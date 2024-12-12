@extends('includePage') 
@section('body')
    <div class="row card card-body  ">
            <table class="table table-striped table-hover text-center ">
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
                <tr>
                    <td>10.10.2001</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <a href=""><i class="fa-solid fa-eye mx-2" style="color:rgb(193, 11, 20);"></i></a>
                        <a href=""><i class="fa-solid fa-pen-to-square mx-2" style="color: #c10b26;"></i></a>
                        <a href=""><i class="fa-solid fa-trash mx-2" style="color: #c10b26;"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection