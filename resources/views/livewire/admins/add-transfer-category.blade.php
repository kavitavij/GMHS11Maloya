<div>
    <div class="middle_container">
        <div class="left_content">
            <div class="table_container">
                <h3>Add Transfer Certificate Category</h3>
                <form class="px-4" enctype="multipart/form-data" wire:submit.prevent="save">
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
                                <p class="text mb-1 text-black"> Category Name :</p>
                                <input class="form-control mb-3" wire:model="category_name" type="text" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="flex-column">
                                <p class="text mb-1 text-black">Upload Image :</p>
                                <input class="form-control mb-3" wire:model="image" type="file" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="flex-column ">
                                <button class="mb-3 bttn" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            @livewire('admins.add-transfer-certificate')
            <div class="table_container">
                <h3>Transfer Certifacate Categorys </h3>
                <table class="gallery_detail">
                    <thead>
                        <tr style="background-color: #56767f; color: #fff">
                            <th>Category's Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($categorydata) > 0)
                        @foreach ($categorydata as $data)
                        <tr style="background-color: #eee">
                            <td>{{$data->category_name}}</td>
                            <td>
                                <a href="">
                                    <button class="mb-3 bttn">
                                        Delete
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                                @else
                                <td colspan="7" align="center">
                                    No Data Found.
                                </td>
                                @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>