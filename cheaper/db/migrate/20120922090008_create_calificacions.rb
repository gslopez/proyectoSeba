class CreateCalificacions < ActiveRecord::Migration
  def change
    create_table :calificacions do |t|
      t.text :texto
      t.integer :numero
      t.integer :vendedor
      t.integer :comprador

      t.timestamps
    end
  end
end
