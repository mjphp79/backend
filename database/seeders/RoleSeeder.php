<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Role;
  
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            ["title" => "Author"],
            ["title" => "Editor"],
            ["title" => "Subscriber"],
            ["title" => "Administrator"]
        ]);        
    }
}