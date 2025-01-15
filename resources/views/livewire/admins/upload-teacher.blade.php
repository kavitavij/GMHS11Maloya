<div>
    <div class="middle_container">
        <div class="left_content">
            <div class="table_container">
                <h3>Add Teaching</h3>
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
                                <p class="text mb-1"> Teacher Name :</p>
                                <input class="form-control mb-3" wire:model="teacher_name" type="text" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="flex-column">
                                <p class="text mb-1">Designation :</p>
                                <input class="form-control mb-3" wire:model="designation" type="text" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="flex-column">
                                <p class="text mb-1">Qualification :</p>
                                <input class="form-control mb-3" wire:model="qualification" type="text" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="flex-column">
                                <p class="text mb-1">Assign Class :</p>
                                <input class="form-control mb-3" wire:model="assign_class" type="text" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="flex-column">
                                <p class="text mb-1">Assign Subject :</p>
                                <input class="form-control mb-3" wire:model="assign_subject" type="text" />
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


            <div class="table_container">
                <h3>Teaching </h3>
                <table class="gallery_detail">
                    <thead>
                        <tr style="background-color: #56767f; color: #fff">
                            <th>Teacher Name</th>
                            <th>Designation</th>
                            <th>Qualification</th>
                            <th>Assign Classes</th>
                            <th>Assign Subjects</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($teacherdata) > 0)
                        @foreach ($teacherdata as $data)
                        <tr style="background-color: #eee">
                            <td>{{$data->teacher_name}}</td>
                            <td>{{$data->designation}}</td>
                            <td>{{$data->qualification}}</td>
                            <td>
                                {{$data->assign_class}} 
                            </td>
                            <td>{{$data->assign_subject}}</td>
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