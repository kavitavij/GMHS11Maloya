<div>
    <div class="middle_container">
        <div class="left_content">

            @if(count($aboutdata) > 0)
            @foreach ($aboutdata as $data)

            <span>
                <h3 style="color: #F65314;">{{$data->header}}</h3>
                {{$data->description}}
            </span>
            @endforeach
            @else
            <td colspan="2" align="center">
                No Data Found.
            </td>
            @endif

        </div>
    </div>
</div>