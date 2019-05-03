<h1>Добавить задачу</h1>
<?php if (!empty($this->error)): ?>
    <?= $this->error ?>
<?php endif; ?>
<form method="POST" action="/tasks/add">
    <input type="text" name="tasks" placeholder="new task" autofocus/>
    <button>Сохранить</button>
</form>
