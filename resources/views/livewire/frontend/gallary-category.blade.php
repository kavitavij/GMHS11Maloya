<div>
    <div class="middle_container">
        <div class="left_content">
            <div class="inner">
                <h3>Gallery Categories</h3>
                @if(count($categorydata) > 0)
                @foreach ($categorydata as $data)
                <div class="p_section">

                    <a href="{{ route('gallery', $data->id) }}"  class="image_text">
                    <img src="{{asset('/storage/images/'.$data['image'])}}" class="img" alt="{{$data->image}}" />
                        {{$data->category_name}}
                    </a>
                </div>
                @endforeach
                @else
                <td colspan="2" align="center">
                    No Data Found.
                </td>
                @endif
            </div>
        </div>
    </div>
</div>