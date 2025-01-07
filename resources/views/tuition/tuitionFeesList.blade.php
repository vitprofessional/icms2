@extends('includePage') 
@section('body')
    <div class="row">
        <div class="card card-body  border  ">
            <table class=" table table-striped table-hover text-center shadow-lg p-3 rounded" >
                <thead class="table-info">
                    <tr>
                    <th>Date</th>
                    <th>Student ID</th>
                    <th>Fees Type</th>
                    <th>Amount</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @if(!empty($tfd) && count($tfd)>0)
                    @foreach($tfd as $tfdData)
                    @php
                        $feesData = \App\Models\feesManager::find($tfdData->feesType);
                        if(!empty($feesData)):
                            $feesName = $feesData->feesName;
                        else:
                            $feesName="-";
                        endif;
                    @endphp
                    <tr>
                        <td>{{ $tfdData->created_at->format('Y-m-d') }}</td>
                        <td>{{ $tfdData->stdId }}</td>
                        <td>{{ $feesName }}</td>
                        <td>{{ $tfdData->amount }}</td>
                        <td>
                            <a href="{{route('tuitionReport',['id'=>$tfdData->id])}}"><i class="fa-duotone fa-solid fa-print mx-2" style="color:rgb(0 0 0 );"></i></a>
                            <a href="{{route('tuitionFeeView',['id'=>$tfdData->id])}}"><i class="fa-solid fa-eye mx-2" style="color:rgb(35 170 211);"></i></a>
                            <a href="{{route('editTuitionFee',['id'=>$tfdData->id])}}"><i class="fa-solid fa-pen-to-square mx-2" style="color: #4125b1;"></i></a>
                            <a onclick="confirm('are you sure')" href="{{route('dltTuitionFee',['id'=>$tfdData->id])}}"><i class="fa-solid fa-trash mx-2" style="color: #c10b26;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection