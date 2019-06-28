<?php
class Migration_Create_sales_table extends CI_Migration {
    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'product_id' => [
                'type' => 'INT'
            ],
            'buyer_id' => [
                'type' => 'INT'
            ],
            'date' => [
                'type' => 'DATE'
            ]


        ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('sales');
    }

    public function down() {
        $this->dbforge->drop_table('sales');
    }
}