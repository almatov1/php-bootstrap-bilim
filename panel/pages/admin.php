<?php include "elements/header.php"; ?>

<?php
    include '../safemysql.class.php';
    $db = new safeMysql();

    $sql = "SELECT * FROM groups";
    $groups = $db->getAll($sql);

    $sql = "SELECT * FROM students";
    $students = $db->getAll($sql);
?>
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="">Тізімдер</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Группалар тізімі</h4>
                                    <p class="card-category">Оқу бөліміндегі группалар тізімі</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Атауы</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($groups as $value) {
                                                    echo '<tr>';
                                                    echo "<td>${value['id']}</td>";
                                                    echo "<td>${value['name']}</td>";
                                                    echo '</tr>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Студенттер тізімі</h4>
                                    <p class="card-category">Оқу бөліміндегі студенттер тізімі</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>ФИО</th>
                                            <th>Группасы</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($students as $value) {
                                                    if($value['group_id'] == 1)
                                                        $group = 'ИС-302';
                                                    elseif($value['group_id'] == 2)
                                                        $group = 'ИС-304';
                                                    else
                                                        $group = 'ПО-306';

                                                    echo '<tr>';
                                                    echo "<td>${value['id']}</td>";
                                                    echo "<td>${value['name']}</td>";
                                                    echo "<td>$group</td>";
                                                    echo '</tr>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php include "elements/footer.php"; ?>
