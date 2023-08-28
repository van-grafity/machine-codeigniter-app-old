<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

use Config\Database;

class MigrationDBFresh extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'Database';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'migrate:fresh';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = '[Custom] Drop the Database and Create New Database with the same name';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'migrate:reset [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [
        'name' => 'The controller class name.'
    ];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [
        '--seed' => 'Run All Seeder (DatabaseSeeder)'
    ];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        try {
            CLI::write('Dropping All Table...', 'yellow');
            $db = Database::connect();
            
            // Abaikan pemeriksaan foreign key
            $db->query('SET FOREIGN_KEY_CHECKS = 0');

            // Hapus semua tabel dari database
            $tables = $db->listTables();
            
            foreach ($tables as $table) {
                $db->query("DROP TABLE IF EXISTS `$table`");
            }
            // $db->query("CREATE TABLE `migrations`");

            CLI::wait(3, false);
            CLI::write('All Table Dropped', 'green');
            
            // Kembalikan pemeriksaan foreign key
            $db->query('SET FOREIGN_KEY_CHECKS = 1');

            // Jalankan perintah untuk memigrasi database dari awal.
            CLI::wait(1, false);
            // command('migrate');
            
            // CLI::wait(1, false);
            // $is_seeding = array_key_exists('seed',$params);
            // if($is_seeding){
            //     CLI::newLine();
            //     command('db:seed DatabaseSeeder');
            // }

        } catch (\Exception $e) {
            $this->showError($e);
        }
    }
}
