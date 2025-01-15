<div>
    <div class="middle_container">
        <div class="left_content">
            <div class="inner">
                <h3>Add Images to Gallery</h3>
                <form class="px-4" enctype="multipart/form-data" wire:submit.prevent="store">
                    <div>
                        @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>
                    <div class="row gx-3">
                        <div class="col-lg-4 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">Category Name:</p>
                                <select class="form-control mb-3" id="inputGroupSelect01" wire:model="image_categorys_id">
                                    <option selected>Choose Category</option>
                                    @foreach ($categorydata as $data)
                                    <option value="{{$data->id}}">
                                        {{$data->category_name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">Upload Image:</p>
                                <input class="form-control mb-3" wire:model="image" type="file" multiple>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="flex-column">
                                <button class="mb-3 bttn " type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>