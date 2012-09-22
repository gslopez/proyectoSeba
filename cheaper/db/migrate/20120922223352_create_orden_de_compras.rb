class CreateOrdenDeCompras < ActiveRecord::Migration
  def change
    create_table :orden_de_compras do |t|
      t.boolean :realizado
      t.datetime :fechaEntrega
      t.string :puntoEntrega

      t.timestamps
    end
  end
end
