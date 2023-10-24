<?php

use App\Models\Console;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consoles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $consoles = ['SketchUp Pro 2022', 'Autocad 2023','Revit 2022','Inventor','3ds Max'];

        foreach($consoles as $console){
            Console::create ([
                'name'=>$console
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consoles');
    }
};
