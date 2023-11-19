<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link href="{{route('tenants.create')}}">Add Tenant</x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
            <div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Domain</th>
                </tr>
                @foreach($tenants as $tenant)
                    <tr>
                        <td>{{$tenant->name}}</td>
                        <td>{{$tenant->email}}</td>
                        <td>
                        @foreach($tenant->domains as $domain)
                            {{$domain->domain}}
                        @endforeach
                        </td>
                    </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</x-app-layout>
