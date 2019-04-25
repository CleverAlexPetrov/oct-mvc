<h2>All tasks</h2>
<ul>
    <?php foreach ($this->tasks as $task): ?>
        <li><?= $task['name'] ?></li>
    <?php endforeach; ?>
</ul>
<a href="/tasks/create">+</a>

