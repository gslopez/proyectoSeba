class Publicacion < ActiveRecord::Base
  attr_accessible :detalles, :idProducto, :precio

  belongs_to :usuario

  attr_accessible :foto
  has_attached_file :foto, :styles => { :medium => "180x200>", :thumb => "100x100>" }

end
