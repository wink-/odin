<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscrepantMaterialTable extends Migration {

	public function up()
	{
		Schema::create('discrepant_material', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('workorder_id');
			$table->string('part_number');
			$table->string('customer_code');
			$table->string('process_code');
			$table->integer('quantity_rejected');
			$table->text('reason_for_rejection');
			$table->date('corrective_action_due_date');
			$table->date('rejection_date');
			$table->enum('rejection_type', array('internal', 'external'));
			$table->text('image_url');
			$table->text('form_url');			
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('discrepant_material');
	}
}