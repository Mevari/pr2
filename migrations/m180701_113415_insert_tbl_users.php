<?php

use yii\db\Migration;

/**
 * Class m180701_113415_insert_tbl_users
 */
class m180701_113415_insert_tbl_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180701_113415_insert_tbl_users cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->batchInsert('user', ['username','auth_key','password_hash','password_reset_token','email','status','created_at','updated_at'], [
            ['admin1','cZriGjaFGONoKO8Ct-R6ajLDI1ru1gl7','$2y$13$mVpel1QZZE0kVhU/tjTAReiMyjONUV5MBpiBhYRkwo0IhobIM.HTS','','admin1@nadivane.pl','10',time(),time()],

        ]);

    }

    public function down()
    {
        echo "m180701_113415_insert_tbl_users cannot be reverted.\n";

        return false;
    }

}
