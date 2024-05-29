<div class="py-6">
    <div class="max-w-md mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 text-gray-900 dark:text-gray-100">
                @foreach($tasks as $task)
                    <div class="mb-4">
                        <div class="card">
                            <div class="card-header">
                                Task #{{ $task->id }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Title: {{ ucfirst($task->title) }}</h5>
                                <p class="card-text">Description: {{ $task->description }}</p>
                                <p class="card-text">Due: {{ $task->due_date->format('M d, Y') }}</p>
                            </div>
                            <div class="card-footer">
                                Status: {{ ucfirst($task->status) }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>