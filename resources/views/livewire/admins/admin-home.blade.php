<div>
	<div class="middle_container">
	<h3 class="py-2 px-4" style="color:#F65314">Add School At a Glance
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
				<div class="col-lg-3 col-sm-12">
					<div class="flex-column">
						<p class="text mb-1">Add Heading : </p>
						<input class="form-control mb-3" wire:model="heading" type="text" />
					</div>
				</div>
				<div class="col-lg-3 col-sm-12">
					<div class="flex-column">
						<p class="text mb-1">Add Description : </p>

						<input class="form-control mb-3" wire:model="description"  type="text" />
					</div>
				</div>
				<div class="col-lg-3 col-sm-12">
					<div class="flex-column">
						<p class="text mb-1">Upload Image</p>
						<input class="form-control mb-3" wire:model="image"  type="file" />
					</div>
				</div>
				<div class="col-lg-3 col-sm-12">
					<div class="flex-column">
						<button class="mb-3 bttn" type="submit">
							Submit
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	@livewire('admins.header-data')

</div>