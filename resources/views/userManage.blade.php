<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" align="center">
                        <a href="{{ url('userAdd') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New User
                        </a>
                        <a href="{{ url('lectAdd') }}" class="btn btn-success btn-sm" title="Add New Lecturer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New User
                        </a>
                        <br/>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>