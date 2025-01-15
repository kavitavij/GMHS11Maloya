<div>
    <div class="middle_container">
        <div class="left_content">
            <span>
                <h3>School Committee </h3>
                @if(count($commiteedata) > 0)
                @foreach ($commiteedata as $data)
                <a href="{{ route('committeemamber', $data->id) }}" class="tender_link">
                <i class="fas fa-arrow-circle-right" style="color: #eb511e"></i>
                    {{$data->commitee_name}}
                </a>
                <br/>
            @endforeach
            @else
            <td colspan="7" align="center">
                No Data Found.
            </td>
            @endif
            </span>
        </div>
    </div>
</div>