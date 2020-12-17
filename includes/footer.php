<script src="../assets/js/app.js"></script>



<script>
    function like(postId) {



axios

        .post('../src/controller/publication/action_like.php?post_id=' + postId)
            .then(response => console.log(response))
            .catch(error => console.error(error))
            .finally(() => console.log('like effectué'));


    }
</script>


</body>
</html>