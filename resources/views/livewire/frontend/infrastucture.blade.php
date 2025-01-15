<div>
    <div class="middle_container">
        <div class="left_content">
            <span>
                <h3>Infrastructure</h3>
                The School has well-qualified faculty and excellent facilities for
                students, well-equipped science and computer labs, a large library
                and playground, and a well-rounded curriculum to produce young men
                who can live their dreams. It mainly aims at the overall development
                of the students by using beautiful blend of traditional and modern
                method of teaching. Classes from nursery level to higher secondary
                level (XII) are offered.
            </span>
        </div>
        @if(count($data) > 0)
        @foreach ($data as $data)
        <div class="left_content">
            <span>
                <h3>{{$data->heading}}</h3>
                <img class="img-fluid" src="{{asset('/storage/images/'.$data['image'])}}" width=325 style="float: left; box-shadow: 3px 3px 3px 3px #666;  margin: 10px 25px 10px 10px" alt="{{$data->image}}"/>
                {{$data->description}}
            </span>
        </div>
        @endforeach
        @else
        <td colspan="2" align="center">
            No Data Found.
        </td>
        @endif
    </div>
</div>