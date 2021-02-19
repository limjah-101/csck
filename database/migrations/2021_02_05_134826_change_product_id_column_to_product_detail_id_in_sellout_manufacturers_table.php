<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeProductIdColumnToProductDetailIdInSelloutManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::disableForeignKeyConstraints();

        // Schema::table('sellout_manufacturers', function (Blueprint $table) {
        //     $table->dropForeign('sellout_manufacturers_product_id_foreign');
        //     $table->dropColumn('product_id');
        // });

        // Schema::table('sellout_manufacturers', function(Blueprint $table) {
        //     $table->foreignId('product_detail_id')->after('manufacturer_id')->constrained();
        // });

        // Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::disableForeignKeyConstraints();

        // Schema::table('sellout_manufacturers', function (Blueprint $table) {
        //     $table->dropForeign('sellout_manufacturers_product_detail_id_foreign');
        //     $table->dropColumn('product_detail_id');
        // });

        // Schema::table('sellout_manufacturers', function(Blueprint $table) {
        //     $table->foreignId('product_id')->after('manufacturer_id')->constrained();
        // });

        // Schema::enableForeignKeyConstraints();
    }
}
