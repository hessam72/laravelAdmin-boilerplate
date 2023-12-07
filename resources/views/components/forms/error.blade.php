@props(['message'])

@if ($message)

    @foreach ($message as $msg)
        <li class="li-error">
            <span class="error-span">{{ $msg }}</span>
        </li>
    @endforeach

@endif

