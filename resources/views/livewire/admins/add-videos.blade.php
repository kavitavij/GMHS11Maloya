<div>
    <div class="middle_container">
        <h3 class="py-2 px-4" style="color:#F65314">Add Videos
        </h3>
        <form class="px-4 pb-5" wire:submit.prevent="store" enctype="multipart/form-data">
            <div>
                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                </div>
                @endif
            </div>
            <div class="row gx-3">
                <div class="col-lg-8 col-sm-12">
                    <div class="flex-column">
                        <p class="text mb-1">Upload Videos :</p>
                        <input class="form-control mb-3" wire:model="video_name" type="file" />
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="flex-column">
                        <button class="mb-3 bttn" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>