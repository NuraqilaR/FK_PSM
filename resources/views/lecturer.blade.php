<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Supervisor Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div style="float:left">
                        <td><h4>Registration</h4></td>
                    </div>
                    <div style="float:right">
                        {{-- go to add registration page to apply as candidate --}}
                        <td><a href="{{url('EvaluatorView')}}" class="btn btn-primary">Apply</a></td>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div style="float:left">
                        <td><h4>Evaluation</h4></td>
                    </div>
                    <div style="float:right">
                        <td><a href="LecturerEvaluationMainpage" class="btn btn-primary">Open</a></td>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>