<?php
include "template/header.php";
include "function/dd.php";

// dd($_POST);

if(isset($_POST) && !empty($_POST)) {
    // Vérification que chaque valeur d'input existe ET ne soit pas vide.
    if(isset($_POST["user_name"]) && !empty($_POST["user_name"]) && isset($_POST["favorite_color"]) && !empty($_POST["favorite_color"])&&(isset($_POST["email"]) && !empty($_POST["email"])&&(isset($_POST["sex"]) && !empty($_POST["sex"])&&(isset($_POST["password"]) && !empty($_POST["passeword"]))))) 
        ?>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <?php
                            {foreach($_POST as $key => $value) {
                                echo "<th>$key</th>";
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            foreach($_POST as $key => $value) {
                                echo "<td>$value</td>";
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php
    $_SESSION["user_name"] = $_POST["name1"];
    } else {
        header('Location: index.php');
    }
}


include "template/footer.php";