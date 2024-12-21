@extends('includePage') 
@section('body')
    <div class="row col-md-6 mx-auto">
        <div class="card card-body  border  ">
            
        <div class="mb-3 text-center">
         <u class="h4">View Student Profile</u>
        </div>
            <table class=" table table-striped table-hover hadow-lg p-3 rounded" >
               
              
                <tbody class="">
                <tr>
                        <th scope="col">Date</th>
                        <td>{{$singleView->created_at}}</td>
                    </tr>
                    
                    <tr>
                        <th scope="col">Session</th>
                      <td>{{$singleView->session}}</td>
                     
                    </tr>
                    <tr>
                        <th scope="col">Student Name</th>
                        <td>{{$singleView->stdName}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Class</th>
                        <td>{{$singleView->className}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Section</th>
                        <th>{{$singleView->section}}</th>
                    </tr>
                    <tr>
                        <th scope="col">Roll Number</th>
                        <td>{{$singleView->rollNumber}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Amount</th>
                        <td>{{$singleView->amount}}
                    
                </tbody>
            </table>
            <div class="mt-3">
                <a href="{{route('tuitionFeeList')}}"class="btn btn-success btn-color btn-sm">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection