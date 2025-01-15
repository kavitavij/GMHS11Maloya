<div>
  <div class="header">
    @if(count($data) > 0)
    @foreach ($data as $data)
    <div class="logo">
      <img src="{{asset('/storage/images/'.$data['logo_1'])}}" alt="{{$data->logo_1}}" width="100px" />
    </div>
    <div class="text_logo">
      <h1>
        <a href="/">
          {{$data->school_name}}
        </a>
      </h1>
      <h3>
        <a href="/">
          {{$data->school_address}}
        </a>
      </h3>
    </div>
    <div class="logo2">
      <img src="{{asset('/storage/images/'.$data['logo_2'])}}" alt="{{$data->logo_2}}" width="100px" />
    </div>
    @endforeach
    @else
    <td colspan="7" align="center">
      No Data Found.
    </td>
    @endif
  </div>
  <span class="stext mt-1">What's New</span>
  <marquee class="notification mt-1" onmouseover=stop() onmouseout=start()>
    @if($marqueeData != [])
    <a href="{{ asset('public/storage/files/' .$marqueeData['file'] ) }}" class="tender_link" target="_blank">
      <img src="image/gif-new.gif" height="25px" />
      {{$marqueeData->file_name}}
    </a>
    @else
    &nbsp;

    @endif

  </marquee>
</div>