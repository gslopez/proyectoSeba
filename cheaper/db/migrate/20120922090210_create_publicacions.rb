class CreatePublicacions < ActiveRecord::Migration
  def change
    create_table :publicacions do |t|
      t.integer :idProducto
      t.integer :precio
      t.text :detalles

      t.timestamps
    end
  end
end
