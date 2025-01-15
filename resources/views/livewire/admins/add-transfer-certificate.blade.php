<div>
    <div class="table_container">
        <h3>Add Tranfer Certificate</h3>
        <form class="px-4"  enctype="multipart/form-data" wire:submit.prevent="save">
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
                        <p class="text mb-1">Addmission No :</p>
                        <input  type="number" class="form-control mb-3" wire:model="admission_number" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="flex-column">
                        <p class="text mb-1">Student Name :</p>
                        <input  type="text" class="form-control mb-3" wire:model="student_name" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="flex-column">
                        <p class="text mb-1">Class Last studied Upto :</p>
                        <input  class="form-control mb-3" type="number" wire:model="class_last_studied_upto" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="flex-column">
                        <p class="text mb-1">Certificate Issue Date :</p>
                        <input type="date" class="form-control mb-3" wire:model="certificate_issue_date" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="flex-column">
                        <p class="text mb-1">Select Category :</p>
                        <select class="form-control mb-3" id="inputGroupSelect01" wire:model="transfer_certifacate_categorys_id">
                            <option selected>Choose Category</option>
                            @foreach ($categorydata as $data)
                            <option value='{{$data->id}}'>
                                {{$data->category_name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="flex-column">
                        <p class="text mb-1">Add File :</p>
                        <input class="form-control mb-3" name="transfer_image" type="file" />
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