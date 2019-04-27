<h2>All tasks</h2>
<ul>
    <?php foreach ($this->tasks as $task): ?>
        <li><?= $task['name'] ?></li>
    <?php endforeach; ?>
</ul>
<div style="height: 20px; width: 22px; background-color: aqua">
    <a href="/tasks/create">"+"</a>
</div>

