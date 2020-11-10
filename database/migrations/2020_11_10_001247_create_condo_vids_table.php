<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondoVidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'condo_vids';

        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->String('title');
            $table->String('conteudo');
            $table->String('autor');
            $table->timestamps();
        });

        DB::table($tableName)->insert(
            array(
                [
                    'title' => 'Regra 1',
                    'conteudo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorum, repellendus animi harum exercitationem mollitia qui consequatur corrupti praesentium, officia esse perferendis repellat totam cumque vitae! Ea beatae ullam dolorum.',
                    'autor' => 'João Vitor Barbosa Souza'
                ],
                [
                    'title' => 'Regra 2',
                    'conteudo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorum, repellendus animi harum exercitationem mollitia qui consequatur corrupti praesentium, officia esse perferendis repellat totam cumque vitae! Ea beatae ullam dolorum.',
                    'autor' => 'João Vitor Barbosa Souza'   
                ],
                [
                    'title' => 'Regra 2',
                    'conteudo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorum, repellendus animi harum exercitationem mollitia qui consequatur corrupti praesentium, officia esse perferendis repellat totam cumque vitae! Ea beatae ullam dolorum.',
                    'autor' => 'João Vitor Barbosa Souza'   
                ],
                [
                    'title' => 'Regra 2',
                    'conteudo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorum, repellendus animi harum exercitationem mollitia qui consequatur corrupti praesentium, officia esse perferendis repellat totam cumque vitae! Ea beatae ullam dolorum.',
                    'autor' => 'João Vitor Barbosa Souza'   
                ],
                [
                    'title' => 'Regra 2',
                    'conteudo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorum, repellendus animi harum exercitationem mollitia qui consequatur corrupti praesentium, officia esse perferendis repellat totam cumque vitae! Ea beatae ullam dolorum.',
                    'autor' => 'João Vitor Barbosa Souza'   
                ],
                [
                    'title' => 'Regra 2',
                    'conteudo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorum, repellendus animi harum exercitationem mollitia qui consequatur corrupti praesentium, officia esse perferendis repellat totam cumque vitae! Ea beatae ullam dolorum.',
                    'autor' => 'João Vitor Barbosa Souza'   
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condo_vids');
    }
}
