
        <div class="livros" id="imagens">
            <?php foreach($livros as $l) { 
                $sql = "SELECT * FROM livros WHERE idlivros = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(1, $l['livros_idlivros']);
                $stmt->execute();

                $livro = $stmt->fetch(); ?>

                <img src="../../IMG/livros/<?php echo $livro['capa']; ?>.jpg">


            <?php } ?>
                
        </div>

    </main>
    <?php include("../Class/footer.php") ?>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        $(".bmenu").click(function() {
            $(".menu").show();
        });
        $(".btn").click(function() {
            $(".menu").hide();
        });
    </script>
</body>

</html>
