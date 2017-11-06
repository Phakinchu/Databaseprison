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
<<<<<<< HEAD
        Schema::disableForeignKeyConstraints();
        $this->call('PostsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('PostsCategoriesTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('PostsTagsTableSeeder');
        Schema::enableForeignKeyConstraints();
    }
=======
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
        $this->call('CrimeTableSeeder');
        $this->call('ManagecaseTableSeeder');
        $this->call('PlusscoreTableSeeder');
        schema::enableForeignKeyConstraints();
    }   
>>>>>>> c4c3c7c58d240c004efa36e79375916c9f859ed0
}
