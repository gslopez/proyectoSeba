class CreateUsuarios < ActiveRecord::Migration
  def change
    create_table :usuarios do |t|
      t.string :nombre
      t.string :user
      t.string :password
      t.integer :ve
      t.integer :vf
      t.integer :vn

      t.timestamps
    end
  end
end
