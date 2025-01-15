<div>
    <div class="middle_container">
         <div class="left_content">
             <div class="table_container">
               <h3>Add Gallery Category</h3>
               <form class="px-4" enctype="multipart/form-data" wire:submit.prevent="store">
                   <div>
                       @if (session()->has('message'))
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                           {{ session('message') }}
                       </div>
                       @endif
                       @if (session()->has('delete'))
                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           {{ session('delete') }}
                       </div>
                       @endif
                   </div>
                   <div class="row gx-3">
                       <div class="col-3">
                           <div class="flex-column">
                               <p class="text mb-1">Category Name:</p>
                               <input class="form-control mb-3" wire:model="category_name" type="text" />
                           </div>
                       </div>
                       <div class="col-3">
                           <div class="flex-column">
                               <p class="text mb-1">Upload Image:</p>

                               <input class="form-control mb-3" wire:model="image" type="file" />
                           </div>
                       </div>
                       <div class="col-3">
                           <div class="flex-column">
                               <button class="mb-3 bttn " type="submit">
                                   Submit
                               </button>
                           </div>
                       </div>
                   </div>
               </form>
          </div>
     
   <div class="table_container">
       <h3>List Gallery Category</h3>
       <table class="gallery_detail">
           <thead>
               <tr style=" background-color: #56767f; color: #fff">
                   <th>Names</th>
                   <th>Delete</th>
               </tr>
           </thead>
           <tbody>
               @if(count($Category_data) > 0)
               @foreach ($Category_data as $data)
               <tr style="background-color: #eee">
                   <td>{{$data->category_name}}</td>
                   <td style="text-align: center;">
                       <a href="javascript:void(0)" wire:click="delete({{ $data['id'] }})" class="btn mb-3 bttn">
                           Delete
                       </a>
                   </td>
               </tr>
               @endforeach
               @else

               <td colspan="2" align="center">
                   No Data Found.
               </td>

               @endif
           </tbody>
       </table>
   </div>
     </div>
   </div>
   @livewire('admins.UploadGallery')

</div>