<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
                <livewire:hello-world/>

                <a wire::navigate href="/Counter">Go to Counterasdasda</a><br>
                <a wire::navigate href="/NuevaPagina">Nueva Pagina</a><br>
                <a wire::navigate href="/Dashboardpropio">dashboard</a><br>

                <br>
                <br>
                <a wire::navigate href="/DashboardEstacion">estacion</a><br>
            </div>
        </div>
    </div>
</x-app-layout>
