<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if($layout == 'index')
        @include("admin.tabella")
    @elseif($layout == 'edit')
        @include("admin.tabella")
            @if (session('status'))
                <div class="alert alert-danger"><strong>{{ session('status') }}</strong></div>
            @endif
        @include("admin.form-select")   
    @endif
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!--x-jet-welcome /-->
            </div>
        </div>
    </div>

</x-admin-layout>
