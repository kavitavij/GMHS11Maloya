<div>
    <div>
        <div class="middle_container">
            <h3 class="py-2 px-4" style="color:#F65314">Add NavBar</h3>
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
                            <p class="text mb-1">Name: </p>
                            <input class="form-control mb-3" wire:model="name" type="text"  />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
