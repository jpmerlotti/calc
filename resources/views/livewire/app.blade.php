
<div class="flex flex-col bg-gray-200 justify-between min-h-screen">
    <title>Calculator | {{ $title }}</title>
    <header class="bg-white flex justify-center py-4">
        <div class="flex justify-center px-3 items-center">
            <x-heroicons::outline.calculator class="h-12 w-12 text-amber-500 " />
            <p class="text-7xl text-amber-500 font-bold font-mono">Calculator</p>
        </div>
    </header>
    <main class="flex flex-col items-center" x-data="{ active: 'Home' }">
        <div class="flex justify-around bg-gray-600 min-w-3xl rounded-full text-gray-100 mt-6">
            <nav class="flex px-6 py-4">
                <ul class="flex justify-around items-center space-x-4">
                    {{-- <li class="hover:text-amber-500 focus:text-amber-700">
                        <button type="button" wire:click="calcWithEachValue">
                            Calcular IC com Valores da Amostra</button>
                    </li> --}}
                    <li class="hover:text-amber-500 focus:text-amber-700" :class="{ 'text-amber-500': active === 'Home' }">
                        <button type="button" @click="$wire.home(), active='Home'">
                            <x-heroicons::solid.home class="h-6 w-6" />
                        </button>
                    </li>
                    <li class="hover:text-amber-500 focus:text-amber-700" :class="{ 'text-amber-500': active === 'CWMND' }">
                        <button type="button" @click="$wire.calcWithMedia(), active='CWMND'">
                            Calcular IC com Média e Desvio Padrão</button>
                    </li>
                    <li class="hover:text-amber-500 focus:text-amber-700" :class="{ 'text-amber-500': active === 'CWPND' }">
                        <button type="button" @click="$wire.calcWithPercentage(), active='CWPND'">
                            Calcular IC por Proporção</button>
                    </li>
                    <li class="hover:text-amber-500 focus:text-amber-700" :class="{ 'text-amber-500': active === 'FPWM' }">
                        <button type="button" @click="$wire.findPopulationWithMedia(), active = 'FPWM'" wire:click="">
                            Encontrar Amostra com Média</button>
                    </li>
                    <li class="hover:text-amber-500 focus:text-amber-700" :class="{ 'text-amber-500': active === 'FPWP' }">
                        <button type="button" @click="$wire.findPopulationWithProportion(), active = 'FPWP'" wire:click="">
                            Encontrar Amostra com Proporção</button>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="my-6">
            @if($title==='Home')
                @livewire('components.home')
            @elseif($title==='CWMND')
                @livewire('forms.calc-with-mean-and-std-deviation-form')
            @elseif($title==='CWPND')
                @livewire('forms.calc-with-proportion-form')
            @elseif($title==='FPWM')
                @livewire('forms.find-population-with-media-form')
            @elseif($title==='FPWP')
                @livewire('forms.find-population-with-proportion-form')
            @endif
        </div>
    </main>
    <footer class="p-2 bg-gray-950 text-gray-100 flex flex-col items-center">
        <div class="mt-5">
            <p> <span class="text-amber-500"><</span> For devs: build using
                <a href="https://tallstack.dev/" class="hover:text-amber-500 hover:border-b border-amber-500">
                    TALL Stack
                </a> <span class="text-amber-500">/></span>
            </p>
        </div>
        <div class="mt-3 mb-2">
            <p>&copy; 2024 - feito por
                <a href="https://joaopedromerlotti.com.br" class="hover:text-amber-500 hover:border-b border-amber-500">
                    João Pedro Merlotti
                </a>
            </p>
        </div>
    </footer>
</div>
