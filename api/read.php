<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

include_once('../core/initialize.php');

$post = new Post($connect);

// blog post query
$result = $post->read();
// getting the row count
$num = $result->rowCount();
if($num > 0){
    $post_arr = array();
    $post_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $post_item = array(
            `id` => $id,
            `title` => $title,
            `body` => html_entity_decode($body),
            `author` => $author,
            `category_id` => $category_id,
            `category_name` => $category_name
        );
        array_push($post_arr['data'], $post_item);
    }
    // convert to json and output
    echo json_encode($post_arr);
}
else{

}
?>