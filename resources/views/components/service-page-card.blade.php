<div class="rounded shadow py-5 px-4">
    <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
        <h3 class="mb-3">{{ $service-> title }}</h3>
        <p class="mb-4">{{ $service-> short_desc }}</p>
        <a
        class="btn btn-sm btn-outline-primary" wire:navigate
        href="{{ route ('servicePage', $service-> id)}}"
        >View Details <i class="las la-arrow-right ms-1"></i
        ></a>
</div>