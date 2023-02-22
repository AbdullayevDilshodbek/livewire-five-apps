<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model='num1' placeholder="num1">
            <select class="w-24" wire:model='action'>
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model='num2' placeholder="num2">
            <button wire:click='calculate' class="
                bg-indigo-500 py-2 px-4 rounded disabled disabled:cursor-not-allowed disabled:bg-opacity-90 text-white"
                {{ $disabled ? 'disabled' : ''}}>
                =
            </button>
        </div>
        <p class="text-3xl">{{ $result }}</p>
    </div>
</div>
