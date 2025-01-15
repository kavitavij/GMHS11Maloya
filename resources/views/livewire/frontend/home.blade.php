<div>

@livewire('frontend.slider')
  <div class="school_info">
    <div class="info">
      <div class="inner">
        <h1>School At a Glance</h1>
        <div class="block_container">
          @if(count($data) > 0)
          @foreach ($data as $data)
          <div class="block">
            <img src="{{asset('public/storage/images/'.$data['image'])}}" alt="{{$data->image}}" />
            <h4>{{$data->heading}}</h4>
            <span>{{$data->description}}</span>
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
</div>