#!/bin/bash

echo "Entrer le nombre de migration que vous voulez créer :"
read nombre_mig


for (( i=0; i<nombre_mig; i++))
do
    echo "Entrer le nom_du_repertoire"
    read nomrep
    php artisan make:model $nomrep -mc --resource
    echo "------$nomrep------✅✅✅"
done


create table dimitri(
    nom varchar not null,
    sexe varchar check (sexe in ('male','female'))
);


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddSexeColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('sexe')->nullable();
        });

        DB::statement("ALTER TABLE users ADD CONSTRAINT check_sexe CHECK (sexe IN ('M', 'F'))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE users DROP CONSTRAINT check_sexe');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('sexe');
        });
    }
}
