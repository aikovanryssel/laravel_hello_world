@props(['trigger'])

<div x-data="{show:false}" @click.away="show=false">
                        
    <div @click="show=!show">
        {{ $trigger }}
    </div>
    <div class="absolute py-2 bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52" x-show="show">
       {{ $slot }}
    </div>
</div>