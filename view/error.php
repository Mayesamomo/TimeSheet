<?php include '../view/header.php';?>
<main>
    <h1>Error page</h1>
    <section>
        <?php 
        $error_msg = filter_input(INPUT_GET,'msg');
        if($error_msg == NULL)
        {
            echo "Error is:".$error;
        }
        else
        {
            echo "Error is:".$error_msg;
        }
        ?>
    </section>
    <p class="last_paragraph">
        <a href="../controller/index.php?action=get_employees">Return Home</a>
        
    </p>
</main>
<?php include '../view/footer.php'; 