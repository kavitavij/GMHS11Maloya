<div>
    <div class="middle_container">
        <div class="left_content">

            <span>
                <h3 >Videos / Audio </h3>
                @if(count($videoData) > 0)
                @foreach ($videoData as $data)
               
                <video width="320" height="240" controls>
                    <source src="{{ asset('/storage/videos/' .$data['video_name'] ) }}" type="video/mp4">   
                </video>

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