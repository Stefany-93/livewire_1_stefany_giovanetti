<div class="col-12">
    <h2 class="text-center mb-5">Valore: {{ $value }}</h2>
    <div class="row">
        <div class="col-6 d-flex justify-content-center">
            <button class="btn btn-primary" wire:click="increment">Aggiungi 1</button>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <button class="btn btn-danger" wire:click="decrement">Togli 1</button>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-6 d-flex justify-content-center">
            <button class="btn btn-success" wire:click="incrementByNumber(5)">Aggiungi 5</button>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <button class="btn btn-warning" wire:click="decrementByNumber(3)">Togli 3</button>
        </div>
    </div>
</div>
