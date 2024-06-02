<div class="flex items-center space-x-8">
    <div class="flex flex-col bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 items-center">
        <div class="mb-4 w-full">
            <label for="percentage">Porcentagem de sucesso</label>
            <input type="number" wire:model.number="percentage" id="percentage"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4 w-full">
            <label for="stdError">Erro de Proporção</label>
            <input type="number" wire:model.number="stdError" id="stdError"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4 w-full">
            <label for="confidence">Grau de Confiança</label>
            <input type="number" wire:model.number="confidence" id="confidence"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="button" wire:click="calculate"
            class="bg-white border border-amber-500 text-amber-500 rounded py-2 px-10">Enviar</button>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    </div>
    @if($this->isCalculated)
        <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col">
            <span>Tamanho da amostra: {{ $populationSize }}</span>
        </div>
    @endif
</div>
