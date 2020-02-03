<?php

        class Migration_Brands extends CI_Migration {

            public function up() {
                $this->dbforge->add_field('id');
                $this->dbforge->add_field(array(
                    'name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => 255,
                    )
                ));
                $this->dbforge->create_table('brands');
            }

            public function down() {
                $this->dbforge->drop_table('brands');
            }

        }