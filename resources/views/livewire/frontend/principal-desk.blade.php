<div>
    <div class="middle_container">
        <div class="left_content">

            <span>
                @if(count($Principaldata) != [])
                @foreach ($Principaldata as $data)
                <img src="{{asset('/storage/images/'.$data['image'])}}" alt="{{$data->image}}" style="box-shadow: 3px 3px 3px 3px #666; float: left; margin: 10px 20px 10px 10px" height=300 width=300 />
                <h3> {{$data->heading}}</h3>


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