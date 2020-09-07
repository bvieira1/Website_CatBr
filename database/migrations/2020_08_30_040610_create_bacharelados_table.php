<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBachareladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bacharelados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uri');
            $table->text('titleCourse');
            $table->text('courseDurationFirst');
            $table->text('courseDurationSecond');
            $table->text('investmentFirst');
            $table->text('investmentSecond');
            $table->text('workload');
            $table->text('workloadDate');
            $table->text('titleFirst');
            $table->text('titleSecond');
            $table->text('third');
            $table->text('video')->nullable();
            $table->text('a1First');
            $table->text('a1FirstHours');
            $table->text('a1Second');
            $table->text('a1SecondHours');
            $table->text('a1Third');
            $table->text('a1ThirdHours');
            $table->text('a1Four')->nullable();
            $table->text('a1FourHours')->nullable();
            $table->text('b1First');
            $table->text('b1FirstHours');
            $table->text('b1Second');
            $table->text('b1SecondHours');
            $table->text('b1Third');
            $table->text('b1ThirdHours');
            $table->text('b1Four')->nullable();
            $table->text('b1FourHours')->nullable();
            $table->text('a2First');
            $table->text('a2FirstHours');
            $table->text('a2Second');
            $table->text('a2SecondHours');
            $table->text('a2Third');
            $table->text('a2ThirdHours');
            $table->text('a2Four')->nullable();
            $table->text('a2FourHours')->nullable();
            $table->text('b2First');
            $table->text('b2FirstHours');
            $table->text('b2Second');
            $table->text('b2SecondHours');
            $table->text('b2Third');
            $table->text('b2ThirdHours');
            $table->text('b2Four')->nullable();
            $table->text('b2FourHours')->nullable();
            $table->text('a3First');
            $table->text('a3FirstHours');
            $table->text('a3Second');
            $table->text('a3SecondHours');
            $table->text('a3Third');
            $table->text('a3ThirdHours');
            $table->text('a3Four')->nullable();
            $table->text('a3FourHours')->nullable();
            $table->text('b3First');
            $table->text('b3FirstHours');
            $table->text('b3Second');
            $table->text('b3SecondHours');
            $table->text('b3Third');
            $table->text('b3ThirdHours');
            $table->text('b3Four')->nullable();
            $table->text('b3FourHours')->nullable();
            $table->text('a4First');
            $table->text('a4FirstHours');
            $table->text('a4Second');
            $table->text('a4SecondHours');
            $table->text('a4Third');
            $table->text('a4ThirdHours');
            $table->text('a4Four')->nullable();
            $table->text('a4FourHours')->nullable();
            $table->text('b4First');
            $table->text('b4FirstHours');
            $table->text('b4Second');
            $table->text('b4SecondHours');
            $table->text('b4Third');
            $table->text('b4ThirdHours');
            $table->text('b4Four')->nullable();
            $table->text('b4FourHours')->nullable();
            $table->text('a5First');
            $table->text('a5FirstHours');
            $table->text('a5Second');
            $table->text('a5SecondHours');
            $table->text('a5Third');
            $table->text('a5ThirdHours');
            $table->text('a5Four')->nullable();
            $table->text('a5FourHours')->nullable();
            $table->text('b5First');
            $table->text('b5FirstHours');
            $table->text('b5Second');
            $table->text('b5SecondHours');
            $table->text('b5Third');
            $table->text('b5ThirdHours');
            $table->text('b5Four')->nullable();
            $table->text('b5FourHours')->nullable();
            $table->text('a6First');
            $table->text('a6FirstHours');
            $table->text('a6Second');
            $table->text('a6SecondHours');
            $table->text('a6Third');
            $table->text('a6ThirdHours');
            $table->text('a6Four')->nullable();
            $table->text('a6FourHours')->nullable();
            $table->text('b6First');
            $table->text('b6FirstHours');
            $table->text('b6Second');
            $table->text('b6SecondHours');
            $table->text('b6Third');
            $table->text('b6ThirdHours');
            $table->text('b6Four')->nullable();
            $table->text('b6FourHours')->nullable();
            $table->text('a7First');
            $table->text('a7FirstHours');
            $table->text('a7Second');
            $table->text('a7SecondHours');
            $table->text('a7Third');
            $table->text('a7ThirdHours');
            $table->text('a7Four')->nullable();
            $table->text('a7FourHours')->nullable();
            $table->text('b7First');
            $table->text('b7FirstHours');
            $table->text('b7Second');
            $table->text('b7SecondHours');
            $table->text('b7Third');
            $table->text('b7ThirdHours');
            $table->text('b7Four')->nullable();
            $table->text('b7FourHours')->nullable();
            $table->text('a8First');
            $table->text('a8FirstHours');
            $table->text('a8Second');
            $table->text('a8SecondHours');
            $table->text('a8Third');
            $table->text('a8ThirdHours');
            $table->text('a8Four')->nullable();
            $table->text('a8FourHours')->nullable();
            $table->text('b8First');
            $table->text('b8FirstHours');
            $table->text('b8Second');
            $table->text('b8SecondHours');
            $table->text('b8Third');
            $table->text('b8ThirdHours');
            $table->text('b8Four')->nullable();
            $table->text('b8FourHours')->nullable();
            $table->text('totalFirst');
            $table->text('totalsecondHours');
            $table->text('courseDescription')->nullable();
            $table->text('courseSubDescription')->nullable();
            $table->text('courseFirst')->nullable();
            $table->text('courseSecond')->nullable();
            $table->text('courseThird')->nullable();
            $table->text('courseBedroom')->nullable();
            $table->text('courseFifth')->nullable();
            $table->text('courseSixth')->nullable();
            $table->text('courseSeventh')->nullable();
            $table->text('courseEighth')->nullable();
            $table->text('courseNinth')->nullable();
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
        Schema::dropIfExists('bacharelados');
    }
}
