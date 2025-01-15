<div>
<link href="/{{ config('app.path') }}css/app.css" rel="stylesheet" />
    <div class="middle_container">
        <div class="left_content">
            <div class="img_container">
                @foreach ($categoryData as $data)
                    <h3> {{$data->category_name}}</h3>
                @endforeach

                @if(count($imagedata) > 0)
                @foreach ($imagedata as $data)
                <a href="{{asset('/storage/images/'.$data['image'])}}" data-lightbox="photos">
                    <img class="img-fluid" src="{{asset('/storage/images/'.$data['image'])}}" alt="{{$data->image}}" />
                </a>
                @endforeach
                @else
                <td colspan="2" align="center">
                    No Data Found.
                </td>
                @endif
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js">
        </script>
    </div>
</div>