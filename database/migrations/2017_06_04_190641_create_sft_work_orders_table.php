<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSftWorkOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sft_work_orders', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('number')->nullable()->default(0);
			$table->string('customer_code', 10)->nullable();
			$table->integer('part_id')->nullable();
			$table->string('part_number')->nullable();
			$table->string('process_code', 10)->nullable();
			$table->decimal('price', 10)->nullable();
			$table->string('price_code', 10)->nullable();
			$table->dateTime('date_received')->nullable();
			$table->dateTime('date_required')->nullable();
			$table->string('customer_purchase_order', 15)->nullable();
			$table->string('customer_packing_list', 15)->nullable();
			$table->decimal('quantity', 10)->nullable()->default(0.00);
			$table->string('unit_code', 10)->nullable();
			$table->decimal('quantity_shipped', 10)->nullable()->default(0.00);
			$table->integer('our_last_packing_list')->nullable();
			$table->string('destination_code', 10)->nullable()->default('same');
			$table->string('carrier_code', 10)->nullable();
			$table->string('freight_code', 10)->nullable();
			$table->dateTime('date_shipped')->nullable();
			$table->integer('invoice_number')->nullable();
			$table->dateTime('invoice_date')->nullable();
			$table->decimal('invoice_amount', 10)->nullable();
			$table->integer('priority')->default(0);
			$table->boolean('rework')->default(0);
			$table->boolean('hot')->default(0);
			$table->boolean('started')->default(0);
			$table->boolean('completed')->default(0);
			$table->boolean('shipped')->default(0);
			$table->boolean('cod')->default(0);
			$table->boolean('invoiced')->default(0);
			$table->text('note', 65535)->nullable();
			$table->timestamps();
			$table->timestamp('createdAt')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('updatedAt')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sft_work_orders');
	}

}
