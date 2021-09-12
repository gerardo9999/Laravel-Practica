<div>


    {{$pais}}


    <div wire:ignore>
        <select name="pais" id="select2" class="select2 form-control" wire:model='pais'>
            <option value="ARG">Argentina</option>
            <option value="BRA">Brasil</option>
            <option value="BOL">Bolivia</option>
            <option value="COL">Colombia</option>
            <option value="CHI">Chile</option>
        </select>
    </div>


    <script>
        document.addEventListener('livewire:load',()=>{
            $('.select2').select2();

            $('.select2').on('change',function () {
                // alert(this.value);
                @this.set('pais',this.value);
            })
        });
    </script>

</div>
