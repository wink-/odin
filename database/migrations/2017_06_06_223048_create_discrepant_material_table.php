<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscrepantMaterialTable extends Migration {

	public function up()
	{
		Schema::create('discrepant_material', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('workorder');
			$table->text('reason_for_rejection');
			$table->date('corrective_action_due_date');
			$table->date('rejection_date');
			$table->enum('rejection_type', array('internal', 'external'));
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('discrepant_material');
	}
}