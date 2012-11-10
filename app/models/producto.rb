class Producto < ActiveRecord::Base
  attr_accessible :nombre
  has_one :caracteristica

  attr_accessible :foto
  has_attached_file :foto, :styles => { :medium => "180x200>", :thumb => "100x100>" }



end
