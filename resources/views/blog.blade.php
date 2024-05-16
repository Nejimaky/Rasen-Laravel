<x-layouts.app
    title="Blog"
>
<h1>Blog</h1>
@foreach ($posts as $posts )

<h1>{{$posts->title}}</h1>
    
@endforeach
</x-layouts.app>