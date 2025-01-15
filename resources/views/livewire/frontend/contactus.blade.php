<div>
    <div class="middle_container">
        <div class="left_content">
            <span>
                <h3>Address</h3>
                @if(count($data) > 0)
                @foreach ($data as $data)
                {{$data->address}}
                <br />
                <b> Contact No:</b> {{$data->phone_number}}
                <br />
                <b> Email :</b>{{$data->email}}
                <br />
                <iframe src="{{$data->map}}" width="90%" height="450" style="border:1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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