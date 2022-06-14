@props(['trigger'])

<div x-data="{ open: false }" @click.away="open = false" class="bg-white">
    <div @click="open = !open ">
        {{ $trigger }}
    </div>

    <div x-show="open" class="absolute bg-white mt-2 rounded-xl" style="display: none">
        {{ $slot }}
    </div>
</div>
