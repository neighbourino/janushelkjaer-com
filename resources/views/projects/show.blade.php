<x-app-layout>
    <div class="container mx-auto">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->short_description }}</p>
        <a href="{{ $project->link_to_project }}">View Project Website</a>
    </div>
</x-app-layout>
