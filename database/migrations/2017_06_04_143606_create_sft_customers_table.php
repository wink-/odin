<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSftCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sft_customers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('code', 10)->nullable();
			$table->string('name')->nullable();
			$table->string('physical_address')->nullable();
			$table->string('address_extension')->nullable();
			$table->string('billing_address')->nullable();
			$table->string('city')->nullable();
			$table->char('state', 2)->nullable();
			$table->string('zip', 10)->nullable();
			$table->integer('ship_to_address_id')->nullable();
			$table->string('ship_to_address_code', 10)->nullable();
			$table->string('destination_code', 10)->nullable();
			$table->integer('carrier_id')->nullable();
			$table->string('carrier_code', 10)->nullable();
			$table->string('CONTACT1', 25)->nullable();
			$table->string('company_phone', 13)->nullable();
			$table->string('EXTENSION1', 4)->nullable();
			$table->string('CONTACT2', 25)->nullable();
			$table->string('PHONE2', 13)->nullable();
			$table->string('EXTENSION2', 4)->nullable();
			$table->string('fax', 13)->nullable();
			$table->string('email')->nullable();
			$table->boolean('cod')->nullable()->default(0);
			$table->string('tax_id')->nullable();
			$table->text('note', 65535)->nullable();
			$table->timestamps();
			$table->timestamp('createdAt')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('updatedAt')->nullable();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sft_customers');
	}

}
