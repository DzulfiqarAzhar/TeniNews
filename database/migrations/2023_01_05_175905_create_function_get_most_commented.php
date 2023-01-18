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
        DB::unprepared('
            CREATE FUNCTION IF NOT EXISTS getMostCommented()
            RETURNS VARCHAR(15)
            BEGIN
                DECLARE newsId VARCHAR(7);
                DECLARE cmt VARCHAR(7);
                SELECT news_id, COUNT(comment) INTO newsId, cmt FROM comments
                    GROUP BY news_id
                    ORDER BY COUNT(comment) DESC
                    LIMIT 1;
                RETURN CONCAT(newsId, "=", cmt);
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
            DROP FUNCTION IF EXISTS getMostCommented;
        ');
    }
};
