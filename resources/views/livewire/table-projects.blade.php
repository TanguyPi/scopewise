@section('meta')
    <meta name="description" content="{{ $metaDescription }}">
@endsection

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-zinc-800 uppercase bg-green-200">
            <tr>
                <th scope="col" class="px-6 py-3">Project name</th>
                <th scope="col" class="px-6 py-3">Team</th>
                <th scope="col" class="px-6 py-3">Stack</th>
                <th scope="col" class="px-6 py-3">Link</th>
            </tr>
        </thead>
        @foreach($projects as $project)
        <tbody>
            <tr class="border-b">
                <th scope="row" class="px-6 py-4 background font-medium text-white whitespace-nowrap">
                    {{$project->name}}
                </th>
                <td class="px-6 py-4 background text-white">
                    {{$project->team}}
                </td>
                <td class="px-6 py-4 background text-white"> 
                        {{ucfirst(str_replace(['[', ']', '"'], '', $project->stack))}}
                </td>
                <td class="px-6 py-4 background text-white">
                    @if($project->estimation)
                        <a href="/projects/{{$project->estimation->id}}" class="font-medium text-white hover:underline">See more</a>
                    @else
                    @endif
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

</div>

