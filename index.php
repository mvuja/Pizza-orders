<?php 

    include('config/db_connect.php');

    // write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    // make query and get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory (good practice)
    mysqli_free_result($result);

    // close connection (good practice)
    mysqli_close($conn);

    //explode(',', $pizzas[0]['ingredients']);


?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>

<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
    <div class="row">

        <?php foreach($pizzas as $pizza): ?>

            <div class="col s12 m6">
                <div class="card z-depth-0">

                    <img src="img/pizza.svg" alt="pizza" class="pizza">

                    <div class="card-content center">
                        <h5> <?php echo htmlspecialchars($pizza['title']); ?> </h5>
                        <ul>
                            <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                                <li style="font-size: 18px;"> <?php echo htmlspecialchars($ing); ?> </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="card-action right-align">
                        <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">more info</a>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>

 

<?php include('templates/footer.php') ?>
</html>