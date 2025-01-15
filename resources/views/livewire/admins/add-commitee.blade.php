<div>
    <div class="middle_container pb-4">
        <h3 class="py-2 px-4" style="color:#F65314">Add Committee</h3>
        <form class="px-4 pb-5" enctype="multipart/form-data" wire:submit.prevent="store">
            <div>
                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                </div>
                @endif
            </div>
            <div class="row gx-3">
                <div class="col-4">
                    <div class="flex-column">
                        <p class="text mb-1">Name: </p>
                        <input class="form-control mb-3" wire:model="commitee_name" type="text" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="flex-column">
                        <button class="mb-3 bttn" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @livewire('admins.AddCommitteeMembers')

</div>