class Usuario < ActiveRecord::Base
  attr_accessible :nombre, :password, :user, :ve, :vf, :vn #ventas exitosas, ventas fallidas, ventas neutras
  has_many :publicaciones
  has_many :orden_de_compra

end
