<div class="p-md-3 p-1">
    <div class="text-center">
        <h1 class="text-white">Generate a
            Link To Make it Comfortable</h1>
    </div>

    <div class="d-flex flex-wrap my-5 justify-content-between align-items-center align-content-center">
        <div class="text-dark flex-shrink-0 col-lg-4 col-md-8 p-2">
            <h4 class="text-dark fw-bolder">Enter Your Link</h4>
            <h6 class="text-dark mb-0 d-block">to generate a link use http or https</h6>
        </div>

        <form wire:submit.prevent="generate" class="flex-grow-1 d-flex p-2">
            <input type="url" required id="url" autocomplete="on" wire:model.defer="url"
                class="form-control form-control-lg @error('url') is-invalid @enderror border-0 rounded-3"
                placeholder="https://www.example.com">

            <button class="btn btn-light btn-lg mx-2 text-dark rounded-3" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Generate">
                <i wire:loading.remove class="bi bi-check2 px-2"></i>
                <img src="{{ asset('assets/img/loader.svg') }}" width="30" wire:loading>
            </button>
        </form>
    </div>

    <div class="d-flex flex-wrap my-5 justify-content-between align-items-center align-content-center">
        <div class="flex-shrink-0 col-lg-4 col-md-8 p-2">
            <h4 class="text-dark fw-bolder">Your Domain Link</h4>
            <h6 class="text-dark mb-0 d-block">copy and share in social network </h6>
        </div>


        <div class="flex-grow-1 d-flex p-2 position-relative">
            <input type="url" id="shortlink" class="form-control form-control-lg border-0 rounded-3"
                placeholder="{{Request::getHost()."/".$find}}" value="https://{{Request::getHost()."/".$find}}"
                {{ !$find ? "disabled" : '' }}>
            <button onclick="copy()" tooltip="Copied" class="btn btn-light btn-lg mx-2 text-dark rounded-3">
                <i class="bi bi-subtract px-2"></i>
            </button>
        </div>
    </div>
</div>
