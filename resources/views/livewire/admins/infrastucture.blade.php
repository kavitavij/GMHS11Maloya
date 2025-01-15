<div>
  <div class="middle_container pb-4">
    <h3 class="py-2 px-4" style="color:#F65314">Add Infrastucture</h3>
    <form class="px-4 pb-5" enctype="multipart/form-data" wire:submit.prevent="store">
      <div>
        @if (session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('message') }}

        </div>
        @endif
      </div>
      <div class="row gx-3">
        <div class="col-3">
          <div class="flex-column">
            <p class="text mb-1">Add Heading : </p>
            <input class="form-control mb-3"  wire:model="heading" type="text" />
          </div>
        </div>
        <div class="col-3">
          <div class="flex-column">
            <p class="text mb-1">Add Description : </p>

            <input id="infrastucture" class="form-control mb-3" wire:model="description" type="text" />
            <!-- <trix-editor input="infrastucture"  wire:ignore ></trix-editor> -->
          </div>
        </div>
        <div class="col-3">
          <div class="flex-column">
            <p class="text mb-1">Upload Image: </p>
            <input class="form-control mb-3" wire:model="image" type="file" />
          </div>
        </div>
        <div class="col-3">
          <div class="flex-column">
            <button class="mb-3 bttn" type="submit">
              Submit
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="table_container">
        <table class="gallery_detail">
          <thead>
            <tr style=" background-color: #56767f; color: #fff">
              <th>Names</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

            @if(count($data) > 0)
            @foreach ($data as $data)
            <tr style="background-color: #eee">
              <th>{{$data->heading}}</th>

              <th>
                <a href="">
                  <button class="mb-3 bttn"   wire:click="delete({{ $data->id }})">
                    Delete
                  </button>
                </a>
              </th>
            </tr>
            @endforeach
            @else

            <td colspan="2" align="center">
              No Data Found.
            </td>

            @endif

          </tbody>
        </table>
      </div>
      
</div>