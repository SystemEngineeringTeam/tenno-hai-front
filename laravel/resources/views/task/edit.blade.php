<x-app-layout>
    <h1>編集</h1>
    <p><a href="{{ route('task.index') }}"> Item List </a></p>

    <form action="{{ route('task.update', $task->id) }}" method="POST">
        +bigIncrements id
        +VARCHAR title
        +TEXT overview
        +TEXT image_path
        +TEXT content
        +bigInteger category_id
        +TIMESTAMP created_at
        +TIMESTAMP updated_at
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}">
        <input type="text" name="overview" value="{{ $task->overview }}">
        <input type="text" name="image_path" value="{{ $task->image_path }}">
        <input type="text" name="content" value="{{ $task->content }}">
        <input type="text" name="category_id" value="{{ $task->category_id }}">
        <input type="submit" value="更新">

    </form>

    // destroy
    <form action="{{ route('task.destroy', $task->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除">
    </form>
</x-app-layout>
