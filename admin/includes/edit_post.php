<?php

if (isset($_GET['p_id'])) {
    $the_post_id = $_GET['p_id'];
}


$query = "SELECT * FROM posts";
$select_posts_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_posts_by_id)) {
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_category_id = $row['post_category_id'];
    $post_status = $row['post_status'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
    $post_tags = $row['post_tags'];
    $post_count = $row['post_comment_count'];
    $post_date = $row['post_date'];
}
?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">投稿タイトル</label>
        <input type="text" class="form-control" name="title" value="<?php echo $post_title; ?>">
    </div>

    <div class="form-group">
        <label for="post_category">投稿カテゴリーID</label>
        <input type="text" class="form-control" name="post_category_id" value="<?php echo $post_id; ?>">
    </div>

    <div class="form-group">
        <label for="author">投稿者</label>
        <input type="text" class="form-control" name="author" value="<?php echo $post_author; ?>">
    </div>

    <div class="form-group">
        <label for="post_status">投稿ステータス</label>
        <input type="text" class="form-control" name="post_status" value="<?php echo $post_status; ?>">
    </div>

    <div class="form-group">
        <label for="post_image">投稿画像</label>
        <img width="100" src="../images/<?php echo $post_image; ?>" alt="">
    </div>

    <div class="form-group">
        <label for="post_tag">投稿タグ</label>
        <input type="text" class="form-control" name="post_tag" value="<?php echo $post_tags; ?>">
    </div>

    <div class="form-group">
        <label for="post_content">投稿コンテンツ</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content; ?>
        </textarea>
    </div>

</form> 