<x-app-layout>
    <h1>新規作成</h1>
    <p><a href="{{ route('task.index') }}"> Item List</a></p>

    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        <div>
            +bigIncrements id
            +VARCHAR title
            +TEXT overview
            +TEXT image_path
            +TEXT content
            +bigInteger category_id
            +TIMESTAMP created_at
            +TIMESTAMP updated_at
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            <input type="text" name="overview" id="overview" value="{{ old('overview') }}">
            <input type="text" name="image_path" id="image_path" value="{{ old('image_path') }}">
            <input type="text" name="content" id="content" value="{{ old('content') }}">
            <input type="text" name="category_id" id="category_id" value="{{ old('category_id') }}">
        </div>
        <input type="submit" value="登録">
    </form>
</x-app-layout>
