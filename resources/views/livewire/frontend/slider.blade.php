<div>
    <div id="carouselExampleCaptions" class="carousel  carousel-light slide  pt-2" style="float: left; width: 100%;" onmouseover=stop() data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/image/slider1.jpeg') }}"  class="d-block w-100" alt="" style="height: 350px;">
                <div class="carousel-caption d-none d-md-block ">
               <strong> Welcome to GOVERNMENT MODEL HIGH SCHOOL, MALOYA, CHANDIGARH</strong>
                </div>
            </div>
            @foreach ($slider as $data)
            <div class="carousel-item">
                <img src="{{ asset('/storage/images/'.$data['slider_image']) }}" style="height: 350px;" class="d-block w-100" alt="{{$data->slider_image}}" class="d-block w-100">
            </div>
            @endforeach
        </div>
    </div>
</div>