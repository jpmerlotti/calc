<div class="flex items-center space-x-8">
    <div class="flex flex-col bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 items-center">
        <div class="mb-4 w-full">
            <label for="stdDeviation">Desvio Padrão</label>
            <input wire:model="stdDeviation" type="text" id="stdDeviation"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
        <div class="mb-4 w-full">
            <label for="stdError">Erro Médio</label>
            <input wire:model="stdError" type="text" id="stdError"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
        <div class="mb-4 w-full">
            <label for="confidence">Grau de Confiança</label>
            <input wire:model.number="confidence" type="number" id="confidence"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
        <button type="button" wire:click="calculate"
            class="bg-white border border-amber-500 text-amber-500 rounded py-2 px-10">Enviar</button>
        {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    </div>
    @if($this->isCalculated)
        <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col">
            <span>Tamanho da amostra: {{ $populationSize }}</span>
        </div>
    @endif
</div>
