<!-- <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
</div> -->

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $task->name }}</h5>
        <p class="card-text">{{ $task->description }}</p>
        <p class="card-text">{{ $task->due_date }}</p>
        <p class="card-text">{{ $task->status }}</p>
        <a href="#" class="btn btn-primary">Edit</a>
        <a href="#" class="btn btn-danger">Delete</a>
    </div>
</div>