<div>
    @livewire('header')

    <!-- Bordered Tabs -->
    <ul class="nav nav-tabs nav-tabs-bordered " id="borderedTab" role="tablist"
        style="background-color: #214674 color: #F65314;">

        <li class="nav-item" role="presentation" wire:ignore>
            <button class="nav-link active" id="Home-tab" data-bs-toggle="tab" data-bs-target="#bordered-Home"
                type="button" role="tab" aria-controls="Home" aria-selected="true"><i
                    class="bi bi-pencil-square dash-icons"></i> Home</button>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">CBSE</a>
            <ul class="dropdown-menu hcolor">
                <li><button class="dropdown-item" style="color: #F65314;" id="Affiliation-tab" data-bs-toggle="tab"
                        data-bs-target="#Affiliation" type="button" role="tab" aria-controls="Affiliation"
                        aria-selected="false">Affiliation Status</button></li>
                <li><button class="dropdown-item" style="color: #F65314;" id="Transfer-tab" data-bs-toggle="tab"
                        data-bs-target="#Transfer" type="button" role="tab" aria-controls="Transfer"
                        aria-selected="false">Transfer Certificate</button></li>
                <li><button class="dropdown-item" style="color: #F65314;" id="Result-tab" data-bs-toggle="tab"
                        data-bs-target="#Result" type="button" role="tab" aria-controls="Result"
                        aria-selected="false">Result</button></li>
            </ul>
        </li>
        <li class="nav-item" role="presentation" wire:ignore>
            <button class="nav-link" id="Mandatory-tab" data-bs-toggle="tab" data-bs-target="#Mandatory" type="button"
                role="tab" aria-controls="Mandatory" aria-selected="false">Mandatory
                Disclosure</button>
        </li><li class="nav-item" role="presentation" wire:ignore>
            <button class="nav-link" id="Video-tab" data-bs-toggle="tab" data-bs-target="#Video" type="button"
                role="tab" aria-controls="Video" aria-selected="false">Video</button>
        </li>
        <li class="nav-item" role="presentation" wire:ignore>
            <button class="nav-link" id="Events-tab" data-bs-toggle="tab" data-bs-target="#Events" type="button"
                role="tab" aria-controls="Events" aria-selected="false">Events</button>
        </li>
        <li class="nav-item" role="presentation" wire:ignore>
            <button class="nav-link" id="Curriculum-tab" data-bs-toggle="tab" data-bs-target="#Curriculum"
                type="button" role="tab" aria-controls="Curriculum" aria-selected="false">Curriculum</button>
        </li>
        <li class="nav-item" role="presentation" wire:ignore>
            <button class="nav-link" id="Gallery-tab" data-bs-toggle="tab" data-bs-target="#Gallery" type="button"
                role="tab" aria-controls="Gallery" aria-selected="false">Gallery</button>
        </li>
        <li class="nav-item" role="presentation" wire:ignore>
            <button class="nav-link" id="Faculty-tab" data-bs-toggle="tab" data-bs-target="#Faculty" type="button"
                role="tab" aria-controls="Faculty" aria-selected="false">Faculty</button>
        </li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <li>
                <a href="route('logout')" class="dropdown-item ms-3 text-black"
                    onclick="event.preventDefault(); this.closest('form').submit();" class="nav-item">
                    {{ __('Log Out') }}
                </a>
            </li>
        </form>
    </ul>
    <div class="tab-content pt-2" id="borderedTabContent">
        <div class="tab-pane fade show active" id="bordered-Home" role="tabpanel" aria-labelledby="Home-tab"
            wire:ignore.self>
            @livewire('admins.principal-desk-data')
        </div>

        <div class="tab-pane fade" id="slider" role="tabpanel" aria-labelledby="slider-tab" wire:ignore.self>
            @livewire('admins.AddSlider')
        </div>

        <div class="tab-pane fade" id="Infrastucture" role="tabpanel" aria-labelledby="Infrastucture-tab"
            wire:ignore.self>@livewire('admins.Infrastucture')
        </div>

        <div class="tab-pane fade" id="Affiliation" role="tabpanel" aria-labelledby="Affiliation-tab"
            wire:ignore.self>@livewire('admins.affiliation')
        </div>

        <div class="tab-pane fade" id="Transfer" role="tabpanel" aria-labelledby="Transfer-tab" wire:ignore.self>
            @livewire('admins.add-transfer-category')
        </div>

        <div class="tab-pane fade" id="Result" role="tabpanel" aria-labelledby="Result-tab" wire:ignore.self>
            @livewire('admins.result')
        </div>

        <div class="tab-pane fade" id="Mandatory" role="tabpanel" aria-labelledby="Mandatory-tab" wire:ignore.self>
            @livewire('admins.mandatory-disclosure')
        </div>

        <div class="tab-pane fade" id="Video" role="tabpanel" aria-labelledby="Video-tab" wire:ignore.self>
            @livewire('admins.AddVideos')
        </div>


        <div class="tab-pane fade" id="Events" role="Events" aria-labelledby="Events-tab" wire:ignore.self>
            @livewire('admins.event')
        </div>

        <div class="tab-pane fade" id="Curriculum" role="Curriculum" aria-labelledby="Curriculum-tab"
            wire:ignore.self>@livewire('admins.Curriculum')
        </div>

        <div class="tab-pane fade" id="Gallery" role="Gallery" aria-labelledby="Gallery-tab" wire:ignore.self>
            @livewire('admins.UploadImageCategory')
        </div>

        <div class="tab-pane fade" id="Contact" role="Contact" aria-labelledby="Contact-tab" wire:ignore.self>
            @livewire('admins.UploadContactus')
        </div>

        <div class="tab-pane fade" id="About" role="About" aria-labelledby="About-tab" wire:ignore.self>
            @livewire('admins.UploadAboutus')
        </div>

        <div class="tab-pane fade" id="Faculty" role="Faculty" aria-labelledby="Faculty-tab" wire:ignore.self>
            @livewire('admins.UploadTeacher')
        </div>

        <div class="tab-pane fade" id="School_Detail" role="School_Detail" aria-labelledby="School_Detail-tab"
            wire:ignore.self> @livewire('admins.UploadSchoolDetails')
        </div>

        <div class="tab-pane fade" id="facility" role="facility" aria-labelledby="facility-tab" wire:ignore.self>
            @livewire('admins.AddFacility')
        </div>

        <div class="tab-pane fade" id="Commitee" role="Commitee" aria-labelledby="Commitee-tab" wire:ignore.self>
            @livewire('admins.AddCommitee')
        </div>
    </div>
</div>
