<div>
    <div class="middle_container">
        <h3 class="py-2 px-4" style="color:#F65314">Add Header</h3>
        <form class="px-4 pb-5" enctype="multipart/form-data" wire:submit.prevent="update">
            <div>
                @if (session()->has('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}

                </div>
                @endif
            </div>
            <div class="row gx-3">
                <div class="col-lg-3">
                    <div class="flex-column">
                        <p class="text mb-1 ">School Name: </p>
                        <input id="school_name" class="form-control mb-3" wire:model="school_name" type="text"  />
                        <!-- <div wire:ignore>
                            <trix-editor input="school_name"></trix-editor>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="flex-column">
                        <p class="text mb-1 ">Address : </p>
                        <input class="form-control mb-3" wire:model="school_address" type="text" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="flex-column">
                        <p class="text mb-1">Upload logo 1: </p>
                        <input class="form-control mb-3" wire:model="logo_1" type="file" />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="flex-column">
                        <p class="text mb-1">Upload logo 2: </p>
                        <input class="form-control mb-3" wire:model="logo_2" type="file" />
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="flex-column float-end">
                        <button class="mb-3 bttn" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>