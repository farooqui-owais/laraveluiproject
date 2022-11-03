<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('account_no');
            $table->text('bank_name');
            $table->set('account_type',['savings','current']);
            $table->set('verified',[0,1]);
            $table->timestamp('beneficary_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficaries');
    }
};
