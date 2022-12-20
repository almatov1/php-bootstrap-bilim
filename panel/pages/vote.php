<?php include "elements/header.php"; ?>

<?php
    include '../safemysql.class.php';
    $db = new safeMysql();

    $sql = "SELECT * FROM students";
    $students = $db->getAll($sql);
?>
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="">Қатысым тіркеу</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <form style="width: 500px" id="voteform" method="get" action="vote.php">
                                Күні: <input style="margin-bottom:20px;" type="date" id="start" name="tecDate" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                                
                                <p><select class="form-select" form="voteform" name="id">
                                    <?php
                                        foreach ($students as $value) {
                                            echo "<option value=${value['id']}>${value['name']}</option>";
                                        }
                                    ?>
                                </select></p>

                                <p><select class="form-select" form="voteform" name="uch">
                                    <option value="1">Қатысты</option>
                                    <option value="0">Қатыспады</option>
                                </select></p>


                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <input type="submit" class="btn btn-primary btn-md"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Жөнелту">
                                </div>
                            </form>

                            <?php
                                if(!empty($_GET['tecDate']) && !empty($_GET['id']) && isset($_GET['uch'])) {
                                    $date = $_GET['tecDate'];
                                    $student_id = $_GET['id'];
                                    $value = $_GET['uch'];

                                    $sql = "SELECT group_id FROM students WHERE id = $student_id";
                                    $group_id = $db->getOne($sql);

                                    $sql = "INSERT INTO postability (student_id, value, date, group_id) VALUES ('$student_id', '$value', '$date', '$group_id')";
                                    $insertQuery = $db->query($sql);

                                    if($insertQuery) {
                                        echo '<p style="color: green;">Сәтті аяқталды!</p>';
                                    } else {
                                        echo '<p style="color: red;">Сәтсіз!</p>';
                                    }
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>

<?php include "elements/footer.php"; ?>
