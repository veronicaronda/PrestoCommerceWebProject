<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {


        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $categories = [
            'Abbigliamento', 'Accessori', 'Arredamento', 'Motori', 'Bambini', 'Casa', 'Collezionismo', 'Elettronica', 'Film','Musica', 'Fotografia', 'Videogiochi', 'Hobby', 'Libri', 'Riviste', 'Nautica', 'Sport', 'Telefonia', 'Ufficio', 'Viaggi', 'Altro'
        ];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
