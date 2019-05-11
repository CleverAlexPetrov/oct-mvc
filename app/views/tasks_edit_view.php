<h1>Редактировать</h1>
<form method="POST" action="/tasks/save">
    <input type="text" name="new_task" value="<?= $_POST['editTaskName']; ?>" autofocus/>
    <button>Сохранить</button>
</form>