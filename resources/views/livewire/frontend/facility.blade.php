<div>
    <div>
        <div class="middle_container">
            <div class="left_content">
                <span>
                    @if(count($facilitydata) > 0)
                    @foreach ($facilitydata as $data)
                    <h3>{{$data->heading}}</h3>
                    <img class="img-fluid" src="{{asset('public/storage/images/'.$data['image'])}}" width=325 style="float: left; box-shadow: 3px 3px 3px 3px #666;  margin: 10px 25px 10px 10px" />
                    {{$data->description}}
                    @endforeach
                    @else
                    <td colspan="2" align="center">
                        No Data Found.
                    </td>
                    @endif
                </span>
            </div>
        </div>
    </div>
</div>