{{-- modal_custom.blade.php --}}
<x-adminlte-modal id="modalEmpleado" title="Account Policy" size="lg" theme="primary"  v-centered
    static-backdrop scrollable>
    <div style="height:800px;">Read the account policies...</div>
    <x-slot name="footerSlot">
        <x-adminlte-button class="mr-auto" theme="success" label="Accept" />
        <x-adminlte-button theme="danger" label="Dismiss" data-dismiss="modal" />
    </x-slot>
</x-adminlte-modal>