<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddPostcodeToTestTable extends AbstractMigration
{
    public function up(): void
    {
        // up method for adding the collumn
        $table = $this->table('test');
        $table->addColumn('postcode', 'string', ['limit' => 10, 'null' => true])
              ->update();
    }

    public function down(): void
    {
        //down method for rolling it back
        $table = $this->table('test');
        $table->removeColumn('postcode')
              ->update();
    }
}
