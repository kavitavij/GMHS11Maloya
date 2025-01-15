<div>
  <div class="middle_container">
    <div class="left_content">
      <div class="table_container">
        <h3>Add Event/ News</h3>
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
                <p class="text mb-1"> Name: </p>
                <input class="form-control mb-3" type="text" wire:model="file_name" />
              </div>
            </div>
            <div class="col-3">
              <div class="flex-column">
                <p class="text mb-1">Upload data:</p>

                <input class="form-control mb-3" type="file" wire:model="file" />
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
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

            @if(count($data) > 0)
            @foreach ($data as $data)
            <tr style="background-color: #eee">
              <th>{{$data->file_name}}</th>

              <th>
                <a href="">
                  <button class="mb-3 bttn">
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
  </div>
</div>