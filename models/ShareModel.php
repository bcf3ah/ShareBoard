<?php
/**
 * Created by PhpStorm.
 * UserModel: Brian
 * Date: 9/20/2017
 * Time: 9:13 AM
 */

class ShareModel extends Model
{
    public function Index()
    {
        $this->query("SELECT * FROM shares ORDER BY create_date DESC");
        $data = $this->resultset();
        return $data;
    }

    public function add()
    {
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']) {
            // Insert into MySQL
            $this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 1);
            $this->execute();
            // Verify
            if ($this->lastInsertId()) {
                // Redirect
                header('Location: ' . ROOT_URL . 'shares');
            }
        }
        return;
    }
}