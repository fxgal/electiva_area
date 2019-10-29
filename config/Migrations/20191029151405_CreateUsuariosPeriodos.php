<?php
use Migrations\AbstractMigration;

class CreateUsuariosPeriodos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('usuarios_periodos');
        $table->addColumn('usuario_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('periodo_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addIndex([
            'usuario_id',
        ], [
            'name' => 'USUARIO_ID',
        ]);
        $table->addIndex([
            'periodo_id',
        ], [
            'name' => 'PERIODO_ID',
        ]);
        $table->create();
    }
}
