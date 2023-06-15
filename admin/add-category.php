<?php
include 'partials/header.php';

// get back form data if if invalid
$title = $_SESSION['add-category-data']['title'] ?? null;
$description = $_SESSION['add-category-data']['description'] ?? null;

unset($_SESSION['add-category-data']);
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add category</h2>
        <?php if (isset($_SESSION['add-category'])) : ?>
            <div class="alert__massage error">
            <p>
                <?= $_SESSION['add-category'];
                unset($_SESSION['add-category']) ?>
            </p>
        </div>
            <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add-category-logic.php" method="POST">
            <input type="text" name="title" value="<?= $title ?>"  placeholder="title">
            <textarea rows="4" value="<?= $description ?>" name="description" placeholder="Description"></textarea>
            <button type="submit" name="submit" class="btn">add category</button>
    
        </form>
    </div>
</section>

<?php
include '../partials/footer.php'
?>