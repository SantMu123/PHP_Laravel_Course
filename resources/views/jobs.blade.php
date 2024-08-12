<x-layout>
    @section('heading', 'Jobs Page')
    <h1>Hello from the Jobs page</h1>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job["id"]}}" class="text-blue-500 hover:underline">
                    <strong>{{$job["Profession"]}}:</strong> Pays {{$job["Payment"]}} per year.
                </a>
            </li>
        @endforeach
    </ul>
    
</x-layout>