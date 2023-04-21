@props(['title'])
<div class="dropdown">
    <button class="btn dropdown-toggle bg-none border-0 p-0 card-title" type="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        {{ $title }}
        <span class="caret-down">
            <i class="bi bi-chevron-down ms-2"></i>
        </span>
    </button>
    {{ $slot }}
</div>
