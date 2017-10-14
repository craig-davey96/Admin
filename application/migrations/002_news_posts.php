<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 13/09/2017
 * Time: 21:48
 */

class Migration_news_posts extends CI_Migration
{

    public function up()
    {

        $this->dbforge->add_field(array(
            'news_post_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'news_post_image' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE
            ),
            'news_post_title' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE
            ),
            'news_post_text' => array(
                'type' => 'TEXT'
            ),
            'news_post_slug' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE
            ),
            'news_post_user_connection' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            'news_post_timstamp' => array(
                'type' => 'TIMESTAMP'
            )
        ));
        $this->dbforge->add_key('news_post_id' , TRUE);
        $this->dbforge->create_table('news_posts' , TRUE);

    }

    public function down()
    {

        $this->dbforge->drop_table('news_posts');

    }

}

?>


