<div>
    <div class="middle_container">
        <h3 class="py-2 px-4" style="color: #F65314">Update Contact Details</h3>
        <form class="px-4 pb-5" enctype="multipart/form-data" wire:submit.prevent="save">
            <div>
                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                </div>
                @endif
            </div>
            <div class="row gx-3 gap-3">
                <div class="col-lg-3 col-sm-12 ">
                    <div class="flex-column">
                        <p class="text mb-1">Address: </p>
                        <input class="form-control mb-3" wire:model="address" type="text" />
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 ">
                    <div class="flex-column">
                        <p class="text mb-1 ">Contact No: </p>
                        <input class="form-control mb-3" wire:model="phone_number" type="text" />
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="flex-column">
                        <p class="text mb-1">Email: </p>
                        <input class="form-control mb-3" wire:model="email" type="text" />
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="flex-column">
                        <p class="text mb-1">Map: </p>
                        <input class="form-control mb-3" wire:model="map" type="text" />
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 ">
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