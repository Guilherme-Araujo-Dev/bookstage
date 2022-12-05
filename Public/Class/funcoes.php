
        <div class="livros" id="imagens">
            <?php foreach($livros as $l) { 
                $sql = "SELECT * FROM livros WHERE idlivros = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(1, $l['livros_idlivros']);
                $stmt->execute();

                $livro = $stmt->fetch();
                ?>

                <button class="btnLivros" name="btnLivros" type="submit" onclick="window.location.href = '../Livros/base.php?id=<?php echo $livro['idlivros']; ?>'">
                    <img src="../../IMG/livros/<?php echo $livro['capa']; ?>.jpg">
                </button>


            <?php } ?>
                
        </div>

    </main>
    <?php include("../Class/footer.php") ?>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="../../JS/button.js"></script>

</body>

</html>
