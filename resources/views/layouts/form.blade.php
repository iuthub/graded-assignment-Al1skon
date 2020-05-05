<form action="{{ route('taskAdd') }}" method="post">
    @csrf
    <div id="myDIV" class="header">
        <h2>My To Do List</h2>
        <input type="text" name="title" placeholder="Title...">
        <button type="submit" class="addBtn">Add</button>
    </div>
</form>