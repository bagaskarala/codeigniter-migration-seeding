<?php

        class Brands extends Seeder {

            private $table = 'brands';

            public function run() {
                $this->db->truncate($this->table);

                //seed records manually
                $data = [
                    'name' => 'admin',
                ];
                $this->db->insert($this->table, $data);

                //seed many records using faker
                $limit = 33;
                echo "seeding $limit brands";

                for ($i = 0; $i < $limit; $i++) {
                    echo ".";

                    $data = array(
                        'name' => $this->faker->unique()->word,
                    );

                    $this->db->insert($this->table, $data);
                }

                echo PHP_EOL;
            }
        }
        