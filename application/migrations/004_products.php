<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 13/10/2017
 * Time: 21:20
 */

class Migration_products extends CI_Migration
{

    public function up(){

        $this->dbforge->add_field(array(
            'product_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'product_sku' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE
            ),
            'product_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE
            ),
            'product_price' => array(
                'type' => 'DECIMAL',
                'constraint' => '10.8',
                'default' => '0.00'
            ),
            'product_dimensions' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE
            ),
            'product_weight' => array(
                'type' => 'INT',
                'constraint' => 5,
                'default' => '0'
            ),
            'product_user_connection' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            'product_timstamp' => array(
                'type' => 'TIMESTAMP'
            )
        ));
        $this->dbforge->add_key('product_id' , TRUE);
        $this->dbforge->create_table('products' , TRUE);

        $this->dbforge->add_field(array(
            'product_img_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'product_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            ),
            'product_img_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE
            ),
            'product_timstamp' => array(
                'type' => 'TIMESTAMP'
            )
        ));

        $this->dbforge->add_key('product_img_id' , TRUE);
        $this->dbforge->add_key('product_id');
        $this->dbforge->create_table('product_images' , TRUE);

    }


    public function down(){

        $this->dbforge->drop_table('products' , TRUE);
        $this->dbforge->drop_table('product_images' , TRUE);

    }

}