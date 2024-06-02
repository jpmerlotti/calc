<div class="flex items-center space-x-6">
    <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col">
        <div class="mb-4">
            <label for="populationSize">Tamanho da Amostra</label>
            <input wire:model.number="populationSize" type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
            focus:outline-none focus:shadow-outline" id="populationSize">
        </div>
        <div class="mb-4">
            <label for="mean">Média</label>
            <input wire:model="mean" type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
            focus:outline-none focus:shadow-outline" id="mean">
        </div>
        <div class="mb-4">
            <label for="stdDeviation">Desvio Padrão</label>
            <input wire:model="stdDeviation" type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
            focus:outline-none focus:shadow-outline" id="stdDeviation">
        </div>
        <div class="mb-4">
            <label for="confidence">Confiança</label>
            <input wire:model.number="confidence" type="number"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
            focus:outline-none focus:shadow-outline" id="confidence">
        </div>
        <button type="button" wire:click="calculate" class="bg-white border border-amber-500 text-amber-500 rounded py-1.5 px-4">Enviar</button>
    </div>
    @if($this->isCalculated)
        <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col">
            <span>Tamanho da amostra: {{ $populationSize }}</span>
            <span>Média: {{ $mean }}</span>
            <span>Desvio Padrão: {{ number_format($stdDeviation, 2, ',', '.') }}</span>
            <span>Erro Médio: {{ number_format($stdError, 2, ',', '.') }}</span>
            <span>Intervalo de Confiança: {{ number_format($confidenceInterval['min'], 2, ',', '.') }} < {{ $mean }} < {{ number_format($confidenceInterval['max'], 2, ',', '.') }} </span>
        </div>
    @endif
</div>
