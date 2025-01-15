<div>
    <div class="middle_container">
        <div class="left_content">
            <div class="table_container">
                <h3>Add School Details</h3>
                <form class="px-4" enctype="multipart/form-data" wire:submit.prevent="store()">
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
                                <p class="text mb-1"> Affiliation Nuber :</p>
                                <input class="form-control mb-3" wire:model="affiliation_number" type="number" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">Affiliation Validity :</p>
                                <input class="form-control mb-3" wire:model="affiliation_validity" type="number" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">School Code :</p>
                                <input class="form-control mb-3" wire:model="school_code" type="number" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">Name of The School :</p>
                                <input class="form-control mb-3" wire:model="school_name" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">Address of The School :</p>
                                <input class="form-control mb-3" wire:model="address" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">Name of The Principal :</p>
                                <input class="form-control mb-3" wire:model="principal_name" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">Principal Contact Number :</p>
                                <input class="form-control mb-3" wire:model="principal_contact_number" type="number" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">Principal Retirement Date :</p>
                                <input class="form-control mb-3" wire:model="principal_retirement_date" type="date" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">School Contact Number :</p>
                                <input class="form-control mb-3" wire:model="school_contact_number" type="number" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">School Email ID :</p>
                                <input class="form-control mb-3" wire:model="school_email" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">School Website:</p>
                                <input class="form-control mb-3" wire:model="school_website" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">Land Mark Near School :</p>
                                <input class="form-control mb-3" wire:model="landmark" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column">
                                <p class="text mb-1">year of Establishment of School :</p>
                                <input class="form-control mb-3" wire:model="estsblishment_year" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="flex-column ">
                                <button class="mb-3 bttn" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>