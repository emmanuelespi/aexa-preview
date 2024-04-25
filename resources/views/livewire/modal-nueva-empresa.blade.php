<div>
    @if ($isOpen)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
            <div class="p-8 bg-white rounded-lg">
                <button wire:clickO="closeModal">Cerrar</button>
            </div>
        </div>
    @endif
</div>
