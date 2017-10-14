<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 13/09/2017
 * Time: 21:26
 */

    class Migration_activity_log extends CI_Migration {

        public function up(){

            $this->dbforge->add_field(array(
                'activity_id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'activity_type' => array(
                    'type' => 'ENUM',
                    'constraint' => array('Add','Remove','Update'),
                    'unsigned' => TRUE
                ),
                'activity_description' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'unsigned' => TRUE
                ),
                'activity_user_connection' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                    'null' => TRUE
                ),
                'activity_timestamp' => array(
                    'type' => 'TIMESTAMP'
                )
            ));
            $this->dbforge->add_key('activity_id', TRUE);
            $this->dbforge->create_table('activity_log', TRUE);

        }

        public function down(){

            $this->dbforge->drop_table('activity_log');

        }

    }

?>