<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add missing columns or modify existing ones
            if (!Schema::hasColumn('users', 'firstname')) {
                $table->string('firstname', 191)->after('id');
            }
            if (!Schema::hasColumn('users', 'lastname')) {
                $table->string('lastname', 191)->after('firstname');
            }
            if (!Schema::hasColumn('users', 'email')) {
                $table->string('email', 191)->unique()->after('lastname');
            }
            if (!Schema::hasColumn('users', 'contact_number')) {
                $table->string('contact_number', 191)->nullable()->after('email');
            }
            if (!Schema::hasColumn('users', 'postcode')) {
                $table->string('postcode', 191)->nullable()->after('contact_number');
            }
            if (!Schema::hasColumn('users', 'confirm_password')) {
                $table->string('confirm_password', 191)->after('postcode');
            }
            if (!Schema::hasColumn('users', 'file')) {
                $table->string('file', 191)->nullable()->after('confirm_password');
            }
            if (!Schema::hasColumn('users', 'hobbies')) {
                $table->string('hobbies', 191)->nullable()->after('file');
            }
            if (!Schema::hasColumn('users', 'gender')) {
                $table->enum('gender', ['male', 'female', 'other'])->nullable()->after('hobbies');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Safely drop columns if they exist
            if (Schema::hasColumn('users', 'firstname')) {
                $table->dropColumn('firstname');
            }
            if (Schema::hasColumn('users', 'lastname')) {
                $table->dropColumn('lastname');
            }
            if (Schema::hasColumn('users', 'email')) {
                $table->dropColumn('email');
            }
            if (Schema::hasColumn('users', 'contact_number')) {
                $table->dropColumn('contact_number');
            }
            if (Schema::hasColumn('users', 'postcode')) {
                $table->dropColumn('postcode');
            }
            if (Schema::hasColumn('users', 'confirm_password')) {
                $table->dropColumn('confirm_password');
            }
            if (Schema::hasColumn('users', 'file')) {
                $table->dropColumn('file');
            }
            if (Schema::hasColumn('users', 'hobbies')) {
                $table->dropColumn('hobbies');
            }
            if (Schema::hasColumn('users', 'gender')) {
                $table->dropColumn('gender');
            }
        });
    }
}
