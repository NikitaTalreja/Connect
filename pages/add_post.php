<!DOCTYPE html>
<html lang="en">

<head>
    <!--   Start of META TAGS-->
    <meta charset="UTF-8">
    <meta name="description" content="Building a student portal where students can interact and create resume!">
    <meta name="keywords" content="Resume, share, connect, profile">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <!--END OF META TAGS-->
    <!--   TITLE OF THE PAGE-->
    <title>Connect | Newsfeed</title>
    <!--    LINKINGS-->
    <!--LINKING ICON-->
    <link rel="shortcut icon" href="favicon.ico">
    <!--LINKING FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!--PLUGINS-->
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="../assets/global/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="../assets/pages/css/genericcss.css">
    <link rel="stylesheet" href="../assets/global/plugins/froala_editor_2.8.5/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="../assets/global/plugins/froala_editor_2.8.5/css/froala_style.min.css">
    <link rel="stylesheet" href="../assets/pages/css/add_post.css">
    
</head>
<body>
<!--   start of Navigation-->
    <?php
        require_once("includes/header.php");
    ?> 
<!--       end of navigation-->
        <div class="form-outer">
            <form action="http://localhost/connect/pages/scripts/posts/add.php" enctype="multipart/form-data" method="post">
                <label for="post_title">Post Title</label>
                <input type="text" id="post_title" name="post_title">
                
                <label for="post_image">Post Image</label>
                <input type="file" id="post_image" name="post_image" accept="image/*">
                
                <textarea name="post_content" id="post_content" cols="30" rows="10"></textarea>
                <span></span>
                <button type="submit" onclick = "check()" class="yellow-btn post-submit" name="post-submit">Submit</button>
            </form>
        </div>
<!--        end of .form-outer-->

<!--   start of footer-->
    <?php
        require_once("includes/footer.php");
    ?>
<!--    end of footer-->
    <script src="../assets/global/js/jquery3.3.1.min.js"></script>
    <script src="../assets/global/plugins/froala_editor_2.8.5/js/froala_editor.pkgd.min.js"></script>
    <script> $(function() { $('#post_content').froalaEditor() } ); </script>
    <script>
        function check() {
        var slang = ["bastard","rascal","asshole","ass","fuck","fuckoff","af","fo","motherfucker","dick"];
        var input_post_content = document.getElementById("post_content");
        var current_word = input_post_content.split(" ");
        console.log(current_word);
        }
    </script>
</body>
</html> 
