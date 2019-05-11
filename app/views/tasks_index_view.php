<h2>All tasks</h2>
<ul>
    <?php foreach ($this->tasks as $task): ?>
        <li><?= $task['name'] ?></li>
        <form method="POST" action="/tasks/delete">
            <button>&#10006;
                <input type="hidden" name="deleteTaskId" value="<?= $task['id'] ?>"/>
            </button>
        </form>
        <form method="POST" action="/tasks/edit">
            <button>&#9998;
                <input type="hidden" name="editTaskId" value="<?= $task['id'] ?>"/>
                <input type="hidden" name="editTaskName" value="<?= $task['name'] ?>"/>
            </button>           
        </form>
    <?php endforeach; ?>
</ul>
<button>
    <a href="/tasks/create" style="text-decoration: none">&#10010;</a>
</button>
