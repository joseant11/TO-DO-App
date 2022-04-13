<?php
  require_once 'config/database.php';
  require_once 'utils.php';

  $tasks = getAllTasks($db, null, null);
  $filter = 'none';
  if($_GET) {
    $filter = '!none';
    if($_GET['filter'] == 'all') {
      $tasks = getAllTasks($db, null, null);
    } elseif ($_GET['filter'] == 'active') {
      $tasks = getAllTasks($db, true, null);
    } elseif ($_GET['filter'] == 'completed') {
      $tasks = getAllTasks($db, null, true);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <title>(TO-DO) App</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
  </head>

  <div class="supra-body">
    <body>
      <div class="container">
        <div class="header-hero"></div>
        <header class="header">
          <h1 class="title">(TO-DO)</h1>
          <div id="theme"></div>
        </header>

        <section class="input">
          <div class="card card-create">
            <form action="create-task.php" method="post" class="form-create">
              <input type="text" name="input-task" id="input-task" placeholder="Create a new todo...">
              <div class="create-task">
                <button class="create-task-btn" id="create-task-btn"></button>
                <input type="submit">
              </div>
            </form>
          </div>
        </section>

        <section class="list" id="list">
          <?php
            foreach($tasks as $task): ?>
              <div class="card task" id="<?=$task['id']?>">
                <div class="data-task">
                  <a href="update-status.php?id=<?=$task['id']?>&status=<?=$task['status']?>">
                    <button class="complete-task-btn <?=$task['status'] == 'complete' ? 'active' : '';?>">
                      <div class="complete-task-img" <?=$task['status'] == 'complete' ? 'style="visibility:visible"' : 'style="visibility:hidden"';?>></div>
                    </button>
                  </a>
                  <p <?=$task['status'] == 'complete' ? 'style="text-decoration:line-through"' : 'style="text-decoration:none"';?>><?=$task['title']?></p>
                </div>
                <div class="delete">
                  <a href="delete-task.php?id=<?=$task['id']?>">
                    <div class="delete-task-img"></div>
                  </a>
                </div>
              </div>
          <?php endforeach; ?>

          <div class="card task">
            <div class="actions">
              <p><?=$tasks->num_rows?> items left</p>
              <a href="delete-all-completed.php" class="clear-completed">
                <p>Clear Completed</p>
              </a>
            </div>
          </div>
        </section>

        <section class="filters">
          <div class="card last-card">
            <div class="filters-bar">
              <a href="index.php?filter=all"><span class="">All</span></a>
              <a href="index.php?filter=active"><span class="">Active</span></a>
              <a href="index.php?filter=completed"><span class="">Completed</span></a>
            </div>
          </div>
        </section>

      </div>
      <footer class="footer">
        <div class="attribution">
          Coded by <a href="https://github.com/joseant11" target="_blank">Bl4ckP1tt</a>.
        </div>
      </footer>
      <script src="assets/app.js"></script>
    </body>
  </div>
</html>