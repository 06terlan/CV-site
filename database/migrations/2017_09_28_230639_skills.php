<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Skill;

class Skills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('skill',100);
            $table->tinyInteger('percent');
            $table->string('type',20);
            $table->boolean('deleted')->default(0);
            $table->timestamp('created_at')->useCurrent();
        });

        //outo insert data
        foreach ( json_decode(Illuminate\Support\Facades\Storage::get('skills.json',""),"true") as  $skill)
        {
            $Newskill = new Skill();
            $Newskill->skill = $skill->skill;
            $Newskill->percent = $skill->percent;
            $Newskill->type = $skill->type;
            $Newskill->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
