<div>
    <div class="table_container">
        <h3>Add Committee Members</h3>
        <form class="px-4"  wire:submit.prevent="save">
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
                        <p class="text mb-1">Member Name :</p>
                        <input  type="text" class="form-control mb-3" wire:model="mamber_name" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="flex-column">
                        <p class="text mb-1">Designation :</p>
                        <input  type="text" class="form-control mb-3" wire:model="designation" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="flex-column">
                        <p class="text mb-1">Phone Number :</p>
                        <input  class="form-control mb-3" type="text" wire:model="phone_number" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="flex-column">
                        <p class="text mb-1">Select Category :</p>
                        <select class="form-control mb-3" id="inputGroupSelect01" wire:model="committees_id">
                            <option selected>Choose Category</option>
                            @foreach ($commiteedata as $data)
                            <option value='{{$data->id}}'>
                                {{$data->commitee_name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-12">
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