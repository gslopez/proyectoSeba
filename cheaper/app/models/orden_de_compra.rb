class OrdenDeCompra < ActiveRecord::Base
  attr_accessible :fechaEntrega, :puntoEntrega, :realizado
  has_one :publicacion
  has_one :vendedor
  has_one :comprador

end
