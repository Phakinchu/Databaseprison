<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        schema::disableForeignKeyConstraints();
        $this->call('PrisonersTableSeeder');
        $this->call('OfficersTableSeeder');
        $this->call('LevelsTableSeeder');
        $this->call('JailsTableSeeder');
        $this->call('ActivitiesTableSeeder');
        $this->call('AreasTableSeeder');
        $this->call('CellsTableSeeder');
        $this->call('RelativesTableSeeder');
        $this->call('FreeprisonhistoryTableSeeder');
        $this->call('CasedetailsTableSeeder');
        $this->call('PrisonerbehavioralhistoryTableSeeder');
        $this->call('PrisonereducepunishmenthistoryTableSeeder');
        $this->call('VisithistoryTableSeeder');
        $this->call('EventactivitiesTableSeeder');
        $this->call('HaverelativeTableSeeder');
        $this->call('ManagecaseTableSeeder');
        $this->call('PlusscoreTableSeeder');
        $this->call('LoginsTableSeeder');
        schema::enableForeignKeyConstraints();
    }   
}
